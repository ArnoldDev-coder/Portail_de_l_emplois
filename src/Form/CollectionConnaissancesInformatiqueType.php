<?php

namespace App\Form;

use App\DataTransfert\ConnaissancesInformatique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CollectionConnaissancesInformatiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('connaissance')
            ->add('niveau', ChoiceType::class, [
                'choices' => [
                    'NOTIONS ELEMENTAIRES' => 'NOTIONS ELEMENTAIRES',
                    'NOTIONS MOYENNES' => 'NOTIONS MOYENNES',
                    'NOTIONS AVANCEES' => 'NOTIONS AVANCEES'
                ],
                'multiple' => false,
                'expanded' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ConnaissancesInformatique::class
        ]);
    }
}
