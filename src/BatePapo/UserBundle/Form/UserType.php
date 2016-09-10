<?php

namespace BatePapo\UserBundle\Form;

use BatePapo\UserBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => 'Nome', 'required' => true))
            ->add('cpf', 'text', array('label' => 'CPF', 'attr' => array('class' => 'cpf-mask cpf', 'data-toogle' => 'tooltip', 'aria-hidden' => true, 'data-placement' => 'top', 'title' => '')))
            ->add('sexy', ChoiceType::class, [
                'label' => 'Sexo',
                'choices' => [
                    "M" => "Masculino",
                    "F" => "Feminino"
                ],
                'placeholder' => ""
            ])
            ->add('dateBirth', 'date', [
                'label' => 'Data de Nascimento',
                'horizontal_label_class' => '',
                'format' => 'd/M/y',
                'widget' => 'single_text',
                'required' => true,
                'attr' => [
                    'class' => 'datepicker'
                ]
            ])

        ;

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
            'cascade_validation' => true
        ));
    }

}
