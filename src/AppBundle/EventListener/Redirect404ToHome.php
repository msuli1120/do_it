<?php

	namespace AppBundle\EventListener;

	use Symfony\Component\HttpFoundation\RedirectResponse;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
	use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
	use Symfony\Component\Routing\RouterInterface;

	class Redirect404ToHome
	{
		private $router;
		protected $session;

		public function __construct(RouterInterface $router, Session $session)
		{
			$this->router = $router;
			$this->session = $session;
		}

		public function onKernelException(GetResponseForExceptionEvent $event): void
		{
			if (! $event->getException() instanceof NotFoundHttpException) {
				return;
			}

			$this->session->getFlashBag()->add('danger', 'Page is not existed');
			$response = new RedirectResponse($this->router->generate('homepage'));

			$event->setResponse($response);
		}

	}