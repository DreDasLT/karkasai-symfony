<?php

namespace App\Form;

use App\Entity\Abonementas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AbonementasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('galiojaNuo')
            ->add('galiojaIki')
            ->add('klientas')
            ->add('sale')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Abonementas::class,
        ]);
    }
}
