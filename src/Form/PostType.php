<?php

namespace App\Form;

use App\Entity\Post;
use App\Entity\Section;
use App\Entity\Tag;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('postTitle')
            ->add('postText')
            ->add('postDateCreated', null, [
                'widget' => 'single_text',
                'required' => false,
                'empty_data' => date(format: 'Y-m-d H:i:s')

            ])
            ->add('postDatePublished', null, [
                'widget' => 'single_text',
            ])
            ->add('postIsPublished')
            ->add('sections', EntityType::class, [
                'class' => Section::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('tags', EntityType::class, [
                'class' => Tag::class,
                'choice_label' => 'id',
                'multiple' => true,
                'required' => false,
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
