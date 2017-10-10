<?php

	namespace AppBundle\Entity;

	use Doctrine\ORM\Mapping as ORM;
	use Symfony\Component\HttpFoundation\File\File;
	use Vich\UploaderBundle\Mapping\Annotation as Vich;
	use Symfony\Component\Validator\Constraints as Assert;

	/**
	 * UserInfo
	 *
	 * @ORM\Table(name="user_info")
	 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserInfoRepository")
	 * @Vich\Uploadable
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
		 * @Vich\UploadableField(mapping="user_image", fileNameProperty="imageName", size="imageSize")
		 * @var File
		 */
		private $imageFile;

		/**
		 * @var integer
		 *
		 * @ORM\Column(type="integer")
		 */
		private $imageSize;

		/**
		 * @var string
		 * @ORM\Column(type="string", length=255)
		 */
		private $imageName;

		/**
		 * @var \DateTime|null
		 *
		 * @ORM\Column(type="datetime", nullable=true)
		 */
		private $updatedAt;

		/**
		 * @var string
		 * @Assert\NotBlank
		 * @Assert\NotNull
		 * @Assert\Length(min="1")
		 * @ORM\Column(name="firstName", type="string", length=255)
		 */
		private $firstName;

		/**
		 * @var string
		 * @Assert\NotBlank
		 * @Assert\NotNull
		 * @Assert\Length(min="1")
		 * @ORM\Column(name="lastName", type="string", length=255)
		 */
		private $lastName;

		/**
		 * @var string
		 * @Assert\NotBlank
		 * @Assert\NotNull
		 * @Assert\Length(min="5")
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
		public function getFirstName()
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
		public function getLastName()
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
		public function getBio()
		{
			return $this->bio;
		}

		/**
		 * @return User
		 */
		public function getUser()
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

		/**
		 * @return File
		 */
		public function getImageFile()
		{
			return $this->imageFile;
		}

		/**
		 * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
		 *
		 * @return $this|null
		 */
		public function setImageFile(File $image = null)
		{
			$this->imageFile = $image;
			if ($image) {
				$this->updatedAt = new \DateTimeImmutable();
			}
			return $this;
		}

		/**
		 * @return string|null
		 */
		public function getImageName()
		{
			return $this->imageName;
		}

		/**
		 * @param string $imageName
		 *
		 * @return $this
		 */
		public function setImageName($imageName)
		{
			$this->imageName = $imageName;
			return $this;
		}

		/**
		 * @return int|null
		 */
		public function getImageSize(): int
		{
			return $this->imageSize;
		}

		/**
		 * @param int $imageSize
		 *
		 * @return $this
		 */
		public function setImageSize(int $imageSize)
		{
			$this->imageSize = $imageSize;
			return $this;
		}
	}

