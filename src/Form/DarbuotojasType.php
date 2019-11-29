<?php

namespace App\Form;

use App\Entity\Darbuotojas;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DarbuotojasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('vardas')
            ->add('pavarde')
            ->add('telNr')
            ->add('elPastas')
            ->add('dirbaNuo')
            ->add('dirbaIki')
            ->add('isidarbinimoData')
            ->add('nebedirbaNuo')
            ->add('miestas')
            ->add('gatve')
            ->add('sale')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Darbuotojas::class,
        ]);
    }
}
