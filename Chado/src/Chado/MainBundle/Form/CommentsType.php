<?php

namespace Chado\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentsType extends AbstractType{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // ->add('parent', 'hidden', array(
            //     'data' => null,
            //     'property' => 'id',
            // ))
            ->add('parentid', 'hidden', array(
                'mapped'=>false,
                'data' => "",
            ))
            ->add('content')
            ->add('save','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Chado\MainBundle\Entity\ChadoComments'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'chado_mainbundle_chadocomments';
    }
}
