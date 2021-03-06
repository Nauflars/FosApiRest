<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//test Api 1
class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('author', AuthorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        //comentartio
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article'
        ));
        //comentario2
    }
}
