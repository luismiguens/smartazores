<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('email')->add('phone')->add('chooseCar', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
    'choices'  => array(
        'smart fortwo' => 'smartaaaa fortwo',
        'smart forfour' => 'smart forfour')))->add('pickupLocation')->add('dropoffLocation')->add('pickupDate')->add('pickupTime')->add('dropoffDate')->add('dropoffTime');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contact'
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
