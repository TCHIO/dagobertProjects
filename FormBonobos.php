<?php
namespace MyApp\BonobosFriendsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class FormBonobos extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('age')
            ->add('race')
            ->add('Nourriture')
            ->add('famille')))
        ;
    }

    public function getName()
    {
        return 'Bonobos';
    }
}
?>
