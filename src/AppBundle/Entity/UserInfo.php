<?php

	namespace AppBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;

	/**
	 * UserInfo
	 *
	 * @ORM\Table(name="user_info")
	 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserInfoRepository")
	 */
	class UserInfo
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
		 * @ORM\OneToOne(targetEntity="AppBundle\Entity\User", inversedBy="userInfo")
		 */
		private $user;

		/**
		 * @var string
		 *
		 * @ORM\Column(name="firstName", type="string", length=255)
		 */
		private $firstName;

		/**
		 * @var string
		 *
		 * @ORM\Column(name="lastName", type="string", length=255)
		 */
		private $lastName;

		/**
		 * @var string
		 *
		 * @ORM\Column(name="bio", type="text", nullable=true)
		 */
		private $bio;


		/**
		 * Get id
		 *
		 * @return int
		 */
		public function getId(): int
		{
			return $this->id;
		}

		/**
		 * Set firstName
		 *
		 * @param string $firstName
		 */
		public function setFirstName($firstName): void
		{
			$this->firstName = $firstName;
		}

		/**
		 * Get firstName
		 *
		 * @return string
		 */
		public function getFirstName(): string
		{
			return $this->firstName;
		}

		/**
		 * Set lastName
		 *
		 * @param string $lastName
		 */
		public function setLastName($lastName): void
		{
			$this->lastName = $lastName;
		}

		/**
		 * Get lastName
		 *
		 * @return string
		 */
		public function getLastName(): string
		{
			return $this->lastName;
		}

		/**
		 * Set bio
		 *
		 * @param string $bio
		 */
		public function setBio($bio): void
		{
			$this->bio = $bio;
		}

		/**
		 * Get bio
		 *
		 * @return string
		 */
		public function getBio(): string
		{
			return $this->bio;
		}

		/**
		 * @return User
		 */
		public function getUser(): User
		{
			return $this->user;
		}

		/**
		 * @param mixed $user
		 */
		public function setUser($user): void
		{
			$this->user = $user;
		}
	}

