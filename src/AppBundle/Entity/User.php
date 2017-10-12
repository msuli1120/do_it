<?php

	namespace AppBundle\Entity;

	use Doctrine\Common\Collections\ArrayCollection;
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

		/**
		 * @ORM\OneToMany(targetEntity="AppBundle\Entity\UserGroup", mappedBy="admin")
		 */
		private $adminGroups;

		/**
		 * @ORM\ManyToMany(targetEntity="AppBundle\Entity\UserGroup", inversedBy="users")
		 */
		private $userGroups;

		/**
		 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Invitation", mappedBy="user")
		 */
		private $invitations;

		public function __construct()
		{
			parent::__construct();
			$this->roles = array('ROLE_USER');
			$this->adminGroups = new ArrayCollection();
			$this->userGroups = new ArrayCollection();
			$this->invitations = new ArrayCollection();
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

		/**
		 * @return mixed
		 */
		public function getAdminGroups()
		{
			return $this->adminGroups;
		}

		/**
		 * @param mixed $adminGroups
		 */
		public function setAdminGroups($adminGroups)
		{
			$this->adminGroups = $adminGroups;
		}

		/**
		 * @return ArrayCollection
		 */
		public function getUserGroups(): ArrayCollection
		{
			return $this->userGroups;
		}

		/**
		 * @param UserGroup $userGroup
		 *
		 * @internal param mixed $userGroups
		 */
		public function setUserGroup(UserGroup $userGroup)
		{
			if ($this->userGroups->contains($userGroup)){
				return;
			}
			$this->userGroups[] = $userGroup;
		}

		/**
		 * @return mixed
		 */
		public function getInvitations()
		{
			return $this->invitations;
		}

		/**
		 * @param mixed $invitations
		 */
		public function setInvitations($invitations)
		{
			$this->invitations = $invitations;
		}

		public function removeUserGroup(UserGroup $userGroup)
		{
			if (! $this->userGroups->contains($userGroup)){
				return;
			}
			$this->userGroups->removeElement($userGroup);
		}

	}