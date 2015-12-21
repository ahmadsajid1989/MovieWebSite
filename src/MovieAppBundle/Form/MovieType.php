<?php

namespace MovieAppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MovieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text',array('label'=> ' Movie Name:'))
            ->add('release_date')
            ->add('language','choice', array('choices'=> array(

                'Bangla' => 'Bangla',
                'English' => 'English',
                'Hindi' => 'Hindi'
            )
            ))
            ->add('descripton', 'textarea', array('label'=> ' Movie Description'))
            ->add('duration')
            ->add('award', 'text', array('label'=> 'Any Award of this movie', 'required'=> false))
            ->add('country', 'choice', array('choices'=> array(
                'Bangladesh' => 'Bangladesh',
                'India' => 'India',
                'USA' => 'USA',
                'UK' => 'UK'
            ),'label' => 'Origin Country'))
            ->add('url')
            ->add('imageFile', 'file', array('label' => 'Upload Thumbnail'))
            ->add('publisher', 'text', array('label' => 'Publishing Company','required'=> false))
            ->add('producer','text', array('label' => 'Producery','required'=> false))
            ->add('director','text', array('label' => 'Director','required'=> false))
            ->add('cast','text', array('label' => 'Actor/Actress'))
            ->add('file_format','choice',array('choices'=> array(
                '1080p' => '1080p',
                '720p'  =>  '720p',
                '480p'  =>  '480p',
                'HD'    =>  'HD',
                'DvdRip'=>  'DVD RIP',
                'DvdScr'=>  'DVD SCR',
                'SdRip' =>  'SD RIP',
                'CamRip'=>  'CAM RIP'
            )))
            //->add('rating')
            ->add('category')
            ->add('tags')
            ->add('genre')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MovieAppBundle\Entity\Movie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'movieappbundle_movie';
    }
}
