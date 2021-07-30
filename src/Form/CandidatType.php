<?php

namespace App\Form;

use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\LanguageType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('postnom')
            ->add('prenom')
            ->add('sexe', ChoiceType::class, [
                'choices' => ['M' => 'M', 'F' => 'F']
            ])
            ->add('etat_civil',ChoiceType::class, [
                'choices' => [
                    'célibataire' => 'célibataire',
                    'marié' => 'marié',
                    'divorcé' => 'divorcé',
                    'veuf' => 'veuf'
                ]
            ])
            ->add('nationalite', CountryType::class)
            ->add('adresse')
            ->add('photo_file', FileType::class)
            ->add('province_origine', ChoiceType::class, [
                'choices' => array_flip(["Bas-Uele", "Équateur", "Haut-Katanga", "Haut-Lomami", "Haut-Uele", "Ituri", "Kasaï", "Kasaï-Central", "Kasaï-Oriental", "Kinshasa", "Kongo-Central", "Kwango", "Kwilu", "Lomami", "Lualaba", "Mai-Ndombe", "Maniema", "Mongala", "Nord-Kivu", "Nord-Ubangi", "Sankuru", "Sud-Kivu", "Sud-Ubangi", "Tanganyika", "Tshopo", "Tshuapa"])
            ])
            ->add('lieu_naissance')
            ->add('date_naissance')
            ->add('telephone')

            ->add('etudes_faites', CollectionType::class, [
                'allow_add' => true,
                'allow_delete' => true,
                'entry_type' => CollectionEtudeFaiteType::class,
                'by_reference' => false,
            ])
            ->add('connaissance_informatique', CollectionType::class, [
                'allow_add' => true,
                'allow_delete' => true,
                'entry_type' => CollectionConnaissancesInformatiqueType::class,
                'by_reference' => false
            ])
            ->add('experiences_professionnelles', CollectionType::class, [
                'allow_add' => true,
                'allow_delete' => true,
                'entry_type' => CollectionExperienceProfessionnelleType::class,
                'by_reference' => false
            ])
            ->add('personnes_references', CollectionType::class, [
                'allow_add' => true,
                'allow_delete' => true,
                'entry_type' => CollectionPersonneReferenceType::class,
                'by_reference' => false
            ])

            ->add('langues', ChoiceType::class, [
                'choices' => [
                    'FRANÇAIS' => 'FRANÇAIS',
                    'ANGLAIS' => 'ANGLAIS',
                    'LINGALA' => 'LINGALA',
                    'KIKONGO' => 'KIKONGO',
                    'SWAHILI' => 'SWAHILI',
                    'TSHILUBA' => 'TSHILUBA',
                    'PORTUGAIS' => 'PORTUGAIS'
                ],
                'multiple' => true,
                'expanded' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}
