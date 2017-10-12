<?php

	namespace AppBundle\Controller;

	use AppBundle\Entity\Invitation;
	use AppBundle\Entity\User;
	use AppBundle\Entity\UserGroup;
	use AppBundle\Form\InvitationType;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Component\HttpFoundation\Request;

	class InvitationController extends Controller
	{
		/**
		 * @Route("/group/group_invite", name="send_invitation")
		 * @Method("POST")
		 * @param Request $request
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse
		 * @throws \InvalidArgumentException
		 * @throws \LogicException
		 * @throws \OutOfBoundsException
		 */
		public function createAction(Request $request)
		{
			$alreadyIn = array();
			$invitation = new Invitation();
			$form = $this->createForm(InvitationType::class, $invitation);
			$form->handleRequest($request);
			$data = $form->getData();
			$userName = $data->getUser();
			$id = $data->getGroup();

			if ($this->getUser()->getUserName() === $userName) {
				$this->addFlash('warning', "You can't invite yourself!");
				return $this->redirectToRoute('my_admin_group', array('id' => $id));
			}

			$user = $this
				->getDoctrine()
				->getRepository(User::class)
				->findOneBy(array(
					'username' => $userName
				))
			;

			if ($user === null) {
				$this->addFlash('warning', 'Please check the username you entered has already registered with us!');
				return $this->redirectToRoute('my_admin_group', array('id' => $id));
			}

			foreach ($user->getInvitations() as $inv){
				$alreadyIn[] = $inv->getGroup()->getId();
			}


			if (in_array($id, $alreadyIn, false)){
				$this->addFlash('warning', 'You have already sent the invitation to ' . ucwords($userName) . '. Please wait for the reply!');
				return $this->redirectToRoute('my_admin_group', array('id' => $id));
			}

			$group = $this
				->getDoctrine()
				->getRepository(UserGroup::class)
				->find($id);


			if (! empty($group) ) {
				$invitation->setUser($user);
				$invitation->setGroup($group);

				$em = $this->getDoctrine()->getManager();
				$em->persist($invitation);
				$em->flush();
				$this->addFlash('success', 'Invitation has been sent to ' . $userName);
			}
			return $this->redirectToRoute('my_admin_group', array('id' => $id));

		}


		/**
		 * @Route("/user/my_notifications", name="notification")
		 * @Method("GET")
		 * @throws \LogicException
		 */
		public function notificationShowAction()
		{
			$invitationsRepository = $this->getDoctrine()->getRepository(Invitation::class);
			$invitations = $invitationsRepository->findInvitationsByUserId($this->getUser()->getId());
			return $this->render(':group:my_notification.html.twig', array(
				'invitations' => $invitations
			));
		}

		/**
		 * @Route("/group/invitation_acceptance", name="group_invitation_acceptance")
		 * @param Request $request
		 *
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse
		 * @throws \LogicException
		 */
		public function acceptanceAction(Request $request)
		{
			$token = $request->request->get('_csrf_token');
			$em = $this->getDoctrine()->getManager();
			$invitation = $em->getRepository(Invitation::class)
			                 ->find($request->request->get('_invitation'));

			if ($this->isCsrfTokenValid('authenticate', $token)){
				$group = $em->getRepository(UserGroup::class)
				            ->find($request->request->get('_group'));
				if ( $request->request->has('_refuse') ) {
					$em->remove($invitation);
					$em->flush();
					$this->addFlash('success', 'Notification updated!');
				}
				if( $request->request->has('_accept') ) {
					$user = $this->getUser();
					$user->setUserGroup($group);
					$invitation->setAccept(true);
					$em->persist($this->getUser());
					$em->flush();
					$this->addFlash('success', 'You have successfully joined ' . $group->getName());
				}
			}
			$invitationsRepository = $this->getDoctrine()->getRepository(Invitation::class);
			$invitations = $invitationsRepository->findInvitationsByUserId($this->getUser()->getId());
			return $this->redirectToRoute('notification', array(
				'invitations' => $invitations
			));
		}

	}
