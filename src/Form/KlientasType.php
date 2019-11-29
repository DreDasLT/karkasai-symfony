<?php

namespace App\Form;

use App\Entity\Klientas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KlientasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('vardas')
            ->add('pavarde')
            ->add('telNr')
            ->add('elPastas')
            ->add('miestas')
            ->add('gatve')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Klientas::class,
        ]);
    }
}
