<?php

	namespace AppBundle\Entity;

	use Doctrine\Common\Collections\ArrayCollection;
	use Symfony\Component\Validator\Constraints as Assert;
	use Doctrine\ORM\Mapping as ORM;

	/**
	 * UserGroup
	 *
	 * @ORM\Table(name="user_group")
	 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserGroupRepository")
	 */
	class UserGroup
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
		 * @var string
		 *
		 * @ORM\Column(name="name", type="string", length=255)
		 * @Assert\NotBlank
		 * @Assert\NotNull
		 * @Assert\Length(min="3")
		 */
		private $name;

		/**
		 * @var string
		 *
		 * @Assert\NotBlank
		 * @Assert\NotNull
		 * @Assert\Length(min="5", minMessage="For better description of the group, at least 5 characters required")
		 *
		 * @ORM\Column(name="description", type="text")
		 */
		private $description;


		/**
		 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="adminGroups")
		 */
		private $admin;

		/**
		 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Invitation", mappedBy="group")
		 */
		private $invitations;

		/**
		 * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", mappedBy="userGroups")
		 */
		private $users;

		public function __construct()
		{
			$this->users = new ArrayCollection();
			$this->invitations = new ArrayCollection();
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
		 * Set name
		 *
		 * @param string $name
		 *
		 * @return UserGroup
		 */
		public function setName($name)
		{
			$this->name = $name;

			return $this;
		}

		/**
		 * Get name
		 *
		 * @return string
		 */
		public function getName()
		{
			return $this->name;
		}

		/**
		 * Set description
		 *
		 * @param string $description
		 *
		 * @return UserGroup
		 */
		public function setDescription($description)
		{
			$this->description = $description;

			return $this;
		}

		/**
		 * Get description
		 *
		 * @return string
		 */
		public function getDescription()
		{
			return $this->description;
		}

		/**
		 * @return mixed
		 */
		public function getAdmin()
		{
			return $this->admin;
		}

		/**
		 * @param mixed $admin
		 */
		public function setAdmin($admin): void
		{
			$this->admin = $admin;
		}

		/**
		 * @return mixed
		 */
		public function getUsers()
		{
			return $this->users;
		}

		/**
		 * @param User $user
		 *
		 * @internal param mixed $users
		 */
		public function setUser(User $user): void
		{
			if ($this->users->contains($user)){
				return;
			}
			$this->users[] = $user;
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
		public function setInvitations($invitations): void
		{
			$this->invitations = $invitations;
		}

		public function removeUser(User $user)
		{
			if (! $this->users->contains($user)){
				return;
			}
			$this->users->removeElement($user);
		}

	}

