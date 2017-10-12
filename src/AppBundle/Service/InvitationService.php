<?php

	namespace AppBundle\Service;

	use AppBundle\Entity\Invitation;
	use Doctrine\ORM\EntityManagerInterface;
	use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;


	class InvitationService
	{
		protected $em;
		private $token;

		public function __construct(EntityManagerInterface $em, TokenStorage $token)
		{
			$this->em = $em;
			$this->token = $token;
		}

		public function invitationCount()
		{
			$this->token->getToken()->getUser() ? $userId = $this->token->getToken()->getUser()->getId() : null;
			$invitationRepository = $this->em->getRepository(Invitation::class);
			$invitations = $invitationRepository->findInvitationsByUserId($userId);
			return count($invitations);
		}

	}