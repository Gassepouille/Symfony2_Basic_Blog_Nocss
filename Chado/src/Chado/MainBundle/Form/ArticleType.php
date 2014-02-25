<?php

namespace Chado\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('tags',"entity",array(
                "class"=>"ChadoMainBundle:ChadoTag",
                 'property' => 'Tagname',
                 "multiple"=>true,
                 "expanded"=>true
                ))
            ->add('save','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Chado\MainBundle\Entity\ChadoArticle'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'chado_mainbundle_chadoarticle';
    }
}
