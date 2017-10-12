<?php

	namespace AppBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;
	use Symfony\Component\Validator\Constraints as Assert;

	/**
	 * Invitation
	 *
	 * @ORM\Table(name="invitation")
	 * @ORM\Entity(repositoryClass="AppBundle\Repository\InvitationRepository")
	 */
	class Invitation
	{
		/**
		 * @var int
		 *
		 * @ORM\Column(name="id", type="integer")
		 * @ORM\Id
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		private $id;


		/**
		 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="invitations")
		 * @Assert\Regex("/^[A-Za-z0-9]+(?:[_-][A-Za-z0-9]+)*$/")
		 */
		private $user;

		/**
		 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\UserGroup", inversedBy="invitations")
		 * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
		 */
		private $group;

		/**
		 * @var bool
		 *
		 * @ORM\Column(name="accept", type="boolean")
		 */
		private $accept;

		public function __construct($accept = false)
		{
			$this->accept = $accept;
		}


		/**
		 * Get id
		 *
		 * @return int
		 */
		public function getId()
		{
			return $this->id;
		}

		/**
		 * Set accept
		 *
		 * @param boolean $accept
		 *
		 * @return Invitation
		 */
		public function setAccept($accept)
		{
			$this->accept = $accept;

			return $this;
		}

		/**
		 * Get accept
		 *
		 * @return bool
		 */
		public function getAccept()
		{
			return $this->accept;
		}

		/**
		 * @return mixed
		 */
		public function getUser()
		{
			return $this->user;
		}

		/**
		 * @param mixed $user
		 */
		public function setUser($user)
		{
			$this->user = $user;
		}

		/**
		 * @return mixed
		 */
		public function getGroup()
		{
			return $this->group;
		}

		/**
		 * @param mixed $group
		 */
		public function setGroup($group)
		{
			$this->group = $group;
		}

	}

