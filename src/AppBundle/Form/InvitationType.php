<?php

	namespace AppBundle\Form;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;
	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolver;
	use AppBundle\Entity\Invitation;

	class InvitationType extends AbstractType
	{
		/**
		 * {@inheritdoc}
		 */
		public function buildForm(FormBuilderInterface $builder, array $options): void
		{
			$builder
				->add('user', TextType::class)
				->add('send', SubmitType::class, array(
					'label' => 'Invite',
					'attr' => array(
						'class' => 'btn btn-primary'
					)
				))
			;
		}

		/**
		 * {@inheritdoc}
		 * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
		 */
		public function configureOptions(OptionsResolver $resolver): void
		{
			$resolver->setDefaults(array(
				'data_class' => Invitation::class,
				'csrf_protection' => true,
				'csrf_field_name' => '_token',
				'csrf_token_id' => 'invitation'
			));
		}

		/**
		 * {@inheritdoc}
		 */
		public function getBlockPrefix()
		{
			return 'appbundle_invitation';
		}


	}
