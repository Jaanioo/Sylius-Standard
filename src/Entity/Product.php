<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_product')]
class Product extends BaseProduct
{
    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->getTranslation()->getColor();
    }

    /**
     * @param string|null $color
     *
     * @return Product
     */
    public function setColor(?string $color): self
    {
        $this->getTranslation()->setColor($color);

        return $this;
    }

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
