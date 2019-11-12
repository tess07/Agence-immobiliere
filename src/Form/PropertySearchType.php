<?php

namespace App\Form;

<<<<<<< HEAD
use App\Entity\Critere;
use App\Entity\PropertySearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
=======
use App\Entity\PropertySearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
>>>>>>> c13ad70b078910f6019e2781f94e9a5123a6fd9e
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class PropertySearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           
            ->add('minSurface', IntegerType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Surface minimale'
                ]
            ])
        
            ->add('maxPrice' , IntegerType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placeholder' => 'Budget max'
                ]
<<<<<<< HEAD
             ])

             ->add('criteres', EntityType::class, [
                 'required' => false,
                 'label' => false,
                 'class' => Critere::class,
                 'choice_label' => 'name',
                 'multiple' => true
             
             ]);
        }


=======
             ]);
        }

>>>>>>> c13ad70b078910f6019e2781f94e9a5123a6fd9e
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PropertySearch::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }
        public function getBlockPrefix()
        {
            return '';
        }
    
}
