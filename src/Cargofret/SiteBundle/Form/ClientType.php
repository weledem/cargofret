<?php

namespace Cargofret\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver; 

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomClient')
            ->add('prenomClient')
            ->add('adresseClient')
            ->add('cpClient')
            ->add('villeClient')
            ->add('telClient')
            ->add('mailClient')
            ->add('dateClient', 'date')
			->add('Enregistrer',      'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cargofret\SiteBundle\Entity\Client'
        ));
    }
}
