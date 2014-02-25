<?php

namespace Chado\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nickname','text', array(
                'required' => true
            ))
            ->add('mail','email', array(
                'required' => true
            ))
            ->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'The password fields must match.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('website','url', array(
                'required' => false
            ))
            ->add('twitter', 'text', array(
                'required' => false
            ))
            ->add('save','submit');
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Chado\MainBundle\Entity\ChadoUser'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'chado_mainbundle_chadouser';
    }
}
