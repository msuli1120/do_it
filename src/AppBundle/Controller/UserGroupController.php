<?php

	namespace AppBundle\Controller;

	use AppBundle\Entity\User;
	use AppBundle\Entity\UserGroup;
	use AppBundle\Form\UserGroupType;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Component\HttpFoundation\Request;

	/**
	 * Class UserGroupController
	 * @package AppBundle\Controller
	 * @Route("/group")
	 */
	class UserGroupController extends Controller
	{
		/**
		 * @Route("/show_groups", name="user_groups")
		 * @throws \Symfony\Component\Form\Exception\AlreadySubmittedException
		 */
		public function showAction()
		{
			$form = $this->createForm(UserGroupType::class, null, array(
				'action' => $this->generateUrl('create_group'),
				'method' => 'POST'
			));
			$form->remove('edit');
			$form->remove('delete');
			return $this->render('group/group_index.html.twig', array(
				'form' => $form->createView()
			));
		}


		/**
		 * @Route("/create_group", name="create_group")
		 * @Method("POST")
		 * @param Request $request
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 * @throws \InvalidArgumentException
		 * @throws \LogicException
		 * @throws \Symfony\Component\Form\Exception\AlreadySubmittedException
		 */
		public function createAction(Request $request)
		{
			$userGroup = new UserGroup();
			$form = $this->createForm(UserGroupType::class, $userGroup);
			$form->remove('edit');
			$form->remove('delete');
			$form->handleRequest($request);

			if (!$form->isSubmitted() || !$form->isValid()){
				return $this->render('group/group_index.html.twig', array(
					'form' => $form->createView()
				));
			}

			$userGroup->setName($userGroup->getName());
			$userGroup->setDescription($userGroup->getDescription());
			$userGroup->setAdmin($this->getUser());

			$em = $this->getDoctrine()->getManager();
			$em->persist($userGroup);
			$em->flush();

			return $this->redirectToRoute('user_groups');
		}

		/**
		 * @param Int $id
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 * @throws \LogicException
		 * @Route("/my_group/{id}", name="my_admin_group")
		 * @Method("GET")
		 */
		public function myGroupAction(Int $id)
		{
			$userGroup = $this->getDoctrine()
			                  ->getRepository(UserGroup::class)
			                  ->findOneBy(array(
			                  	'admin' => $this->getUser(),
				                  'id' => $id
			                  ));
			if (! $userGroup) {
				$this->addFlash('warning', "You don't have the permission.");
				return $this->redirectToRoute('homepage');
			}
			return $this->render(':group:my_admin_group.html.twig', array(
				'myAdminGroup' => $userGroup
			));
		}
	}
