<?php

declare(strict_types=1);

namespace App\Form;

use App\Entity\ProductTranslation;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('color', ChoiceType::class, [
                'choices' => [
                    'sylius.product.color.blue' => ProductTranslation::PRODUCT_COLOR_BLUE,
                    'sylius.product.color.green' => ProductTranslation::PRODUCT_COLOR_GREEN,
                    'sylius.product.color.red' => ProductTranslation::PRODUCT_COLOR_RED,
                ],
                'label' => 'Color',
                'placeholder' => 'Pick color',
                'required' => false,
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
