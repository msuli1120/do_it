<?php

	namespace AppBundle\Form;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;
	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolver;
	use AppBundle\Entity\UserInfo;
	use Vich\UploaderBundle\Form\Type\VichImageType;

	class UserInfoType extends AbstractType
	{
		/**
		 * {@inheritdoc}
		 * @throws \Symfony\Component\Validator\Exception\ConstraintDefinitionException
		 * @throws \Symfony\Component\Validator\Exception\InvalidOptionsException
		 * @throws \Symfony\Component\Validator\Exception\MissingOptionsException
		 */
		public function buildForm(FormBuilderInterface $builder, array $options): void
		{
			$builder
				->add('firstName', TextType::class)
				->add('lastName', TextType::class)
				->add('bio', TextareaType::class)
				->add('imageFile', VichImageType::class)
				->add('save', SubmitType::class, array('label' => 'save', 'attr' => [
					'formnovalidate' => true
				]))
			;
		}

		/**
		 * {@inheritdoc}
		 * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
		 */
		public function configureOptions(OptionsResolver $resolver): void
		{
			$resolver->setDefaults(array(
				'data_class' => UserInfo::class,
				'csrf_protection' => true,
				'csrf_field_name' => '_token',
				'csrf_token_id' => 'user_info'
			));
		}

		/**
		 * {@inheritdoc}
		 */
		public function getBlockPrefix(): ?string
		{
			return 'appbundle_userinfo';
		}

	}
