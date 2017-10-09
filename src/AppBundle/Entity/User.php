<?php

	namespace AppBundle\Entity;

	use FOS\UserBundle\Model\User as BaseUser;
	use Doctrine\ORM\Mapping as ORM;

	/**
	 * Class User
	 * @ORM\Entity
	 * @ORM\Table(name="for_user")
	 */
	class User extends BaseUser
	{
		/**
		 * @ORM\Id
		 * @ORM\Column(type="integer")
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		protected $id;

		/**
		 * @ORM\OneToOne(targetEntity="AppBundle\Entity\UserInfo", mappedBy="user")
		 */
		private $userInfo;

		public function __construct()
		{
			parent::__construct();
			$this->roles = array('ROLE_USER');
		}

		/**
		 * @return UserInfo|null
		 */
		public function getUserInfo(): ?UserInfo
		{
			return $this->userInfo;
		}

		/**
		 * @param mixed $userInfo
		 */
		public function setUserInfo($userInfo)
		{
			$this->userInfo = $userInfo;
		}
	}