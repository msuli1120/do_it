<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserInfoController extends Controller
{
	/**
	 * @Route("/user_info", name="user_profile")
	 */
	public function showAction()
	{
		return $this->render('default/user_profile.html.twig');
	}
}
