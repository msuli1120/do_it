<?php

	namespace AppBundle\Form;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\Extension\Core\Type\SubmitType;
	use Symfony\Component\Form\Extension\Core\Type\TextareaType;
	use Symfony\Component\Form\Extension\Core\Type\TextType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolver;
	use AppBundle\Entity\UserGroup;

	class UserGroupType extends AbstractType
	{
		/**
		 * {@inheritdoc}
		 */
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder
				->add('name', TextType::class)
				->add('description', TextareaType::class, array(
					'label' => 'Description'
				))
				->add('create', SubmitType::class, array(
					'label' => 'Create',
					'attr' => array(
						'class' => 'btn btn-success'
					)
				))
				->add('edit', SubmitType::class, array(
					'label' => 'Edit',
					'attr' => array(
						'class' => 'btn btn-warning'
					)
				))
				->add('delete', SubmitType::class, array(
					'label' => 'Delete',
					'attr' => array(
						'class' => 'btn btn-danger'
					)
				))
			;
		}

		/**
		 * {@inheritdoc}
		 * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
		 */
		public function configureOptions(OptionsResolver $resolver)
		{
			$resolver->setDefaults(array(
				'data_class' => UserGroup::class,
				'csrf_protection' => true,
				'csrf_field_name' => '_token',
				'csrf_token_id' => 'user_group'
			));
		}

		/**
		 * {@inheritdoc}
		 */
		public function getBlockPrefix()
		{
			return 'appbundle_usergroup';
		}


	}
