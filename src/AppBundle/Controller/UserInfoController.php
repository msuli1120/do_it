<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserInfoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class UserInfoController extends Controller
{
	/**
	 * @Route("/user_info", name="user_profile")
	 * @Method("GET")
	 */
	public function showAction()
	{
		return $this->render('default/user_profile.html.twig');
	}

	/**
	 * @Route("/edit/user_info", name="edit_user_info")
	 * @throws \LogicException
	 * @Method("GET")
	 */
	public function editAction()
	{
		$userInfo = $this->getUser()->getUserInfo();
		$form = $this->createForm(UserInfoType::class, $userInfo, array(
			'action' => $this->generateUrl('update_user_info')
		));
		return $this->render(':default:edit_userinfo.html.twig', array(
			'form' => $form->createView()
		));
	}

	/**
	 * @param Request $request
	 *
	 * @internal param UserInfo $userInfo
	 * @Route("/user_info_update", name="update_user_info")
	 * @Method("POST")
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @throws \LogicException
	 */
	public function updateAction(Request $request)
	{
		$userInfo = $this->getUser()->getUserInfo();
		$form = $this->createForm(UserInfoType::class, $userInfo);
		$form->handleRequest($request);

		if (!$form->isSubmitted() || !$form->isValid()){
			return $this->render(':default:edit_userinfo.html.twig', array(
				'form' => $form->createView()
			));
		}

		if ($form->getClickedButton() && 'save' === $form->getClickedButton()->getName()) {
			$uploadedFile = $userInfo->getImageFile();
			$image = $userInfo->getImageName();
			$size = $userInfo->getImageSize();

			if ( null === $uploadedFile) {
				if ($image === null) {
					$userInfo->setImageName('null');
					$userInfo->setImageSize(33);
				} else {
					$userInfo->setImageName($image);
					$userInfo->setImageSize($size);
				}
			} else {
				$this
					->getUser()
					->getUserInfo()
					->setImageName($uploadedFile->getFilename())
				;
				$this
					->getUser()
					->getUserInfo()
					->setImageSize($uploadedFile->getSize())
				;
			}
			$this->getDoctrine()->getManager()->flush();
			$this->addFlash('success', 'Change Saved');
			return $this->redirectToRoute('user_profile');
		}

		if ($form->getClickedButton() && 'delete' === $form->getClickedButton()->getName()) {
			$user = $this->getUser();
			$userInfo = $this->getUser()->getUserInfo();
			$em = $this->getDoctrine()->getManager();
			$em->remove($userInfo);
			$em->remove($user);
			$em->flush();
			$this->addFlash('success', 'We are sorry to hear that you are leaving us!');
		}
		return $this->redirectToRoute('homepage');
	}
}
