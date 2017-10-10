<?php

	namespace AppBundle\Controller;

	use AppBundle\Entity\UserInfo;
	use AppBundle\Form\UserInfoType;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;

	class DefaultController extends Controller
	{
		/**
		 * @Route("/", name="homepage")
		 * @Method("GET")
		 */
		public function indexAction()
		{
			$form = $this->createForm(UserInfoType::class, null, array(
				'action' => $this->generateUrl('handle_user_info_submission')
			));
			return $this->render('default/index.html.twig', array(
				'form' => $form->createView()
			));
		}

		/**
		 * @param Request $request
		 * @Route("/submit_info", name="handle_user_info_submission")
		 * @Method("POST")
		 * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
		 * @throws \LogicException
		 */
		public function handleUserInfoSubmission(Request $request)
		{
			$userInfo = new UserInfo();
			$form = $this->createForm(UserInfoType::class, $userInfo);

			$form->handleRequest($request);

			if (!$form->isSubmitted() || !$form->isValid()){
				return $this->render('default/index.html.twig', array(
					'form' => $form->createView()
				));
			}

			$uploadFile = $userInfo->getImageFile();
			if ($uploadFile !== null) {
				if (in_array($uploadFile->getMimeType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'], true)) {
					if ($uploadFile->getSize() < 3000000) {
						$userInfo->setUser($this->getUser());
						$em = $this->getDoctrine()->getManager();
						$em->persist($userInfo);
						$em->flush();
						$this->addFlash('success', 'User info has been saved successfully!');
					} else {
						$this->addFlash('warning', 'File size has to be lower than 3MB');
					}
				} else {
					$this->addFlash('warning', 'Only support png, jpg, jpeg or gif');
				}
			} else {
				$userInfo->setUser($this->getUser());
				$userInfo->setImageName('default_avatar.jpg');
				$userInfo->setImageSize(33);
				$em = $this->getDoctrine()->getManager();
				$em->persist($userInfo);
				$em->flush();
				$this->addFlash('success', 'User info has been saved successfully!');
			}
			return $this->redirectToRoute('homepage');
		}
	}
