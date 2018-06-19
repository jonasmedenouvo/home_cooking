<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastName',TextType::class,array('attr'=>array('placeholder'=>'Nom'),'constraints' => array(
                new NotBlank(array("message" => "Entrez votre nom s'il vous plait")),
            )))
            ->add('firstName',TextType::class,array('attr'=>array('placeholder'=>'Prenom'),'constraints' => array(
                new NotBlank(array("message" => "Entrez votre prenom s'il vous plait")),
            )))
            ->add('subject',TextType::class,array('attr'=>array('placeholder'=>'Sujet')))
            ->add('email',EmailType::class, array('attr' => array('placeholder' => 'Votre adresse email'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez entrer une adresse email valide")),
                    new Email(array("message" => "Votre adresse email semble incorrecte")),
                )))
            ->add('message',TextareaType::class,array('attr' => array('placeholder' => 'Entrez votre message'),
                'constraints' => array(
                    new NotBlank(array("message" => "Entrez votre message ici s'il vous plait")),
                )
            ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
//            'data_class' => 'AppBundle\Entity\Contact'
                'error_bubbling' => true

        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contact';
    }


}
