<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UserInfo;
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
		$form = $this->createForm(UserInfoType::class, $userInfo);
		return $this->render(':default:edit_userinfo.html.twig', array(
			'form' => $form->createView()
		));
	}
}
