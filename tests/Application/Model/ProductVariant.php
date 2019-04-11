<?php

declare(strict_types=1);

namespace Tests\Setono\SyliusShippingRequirementsPlugin\Application\Model;

use Doctrine\ORM\Mapping as ORM;
use Setono\SyliusShippingRequirementsPlugin\Model\ProductVariantInterface;
use Setono\SyliusShippingRequirementsPlugin\Model\RequirementsAwareTrait;
use Sylius\Component\Core\Model\ProductVariant as BaseProductVariant;

/**
 * @ORM\Entity()
 * @ORM\Table(name="sylius_product_variant")
 */
class ProductVariant extends BaseProductVariant implements ProductVariantInterface
{
    use RequirementsAwareTrait;

    /**
     * @ORM\ManyToMany(targetEntity="Setono\SyliusShippingRequirementsPlugin\Model\RequirementInterface")
     * @ORM\JoinTable(name="setono_sylius_shipping_requirements__product_variant_requirements",
     *      joinColumns={@ORM\JoinColumn(name="requirement_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="product_variant_id", referencedColumnName="id", unique=true)}
     * )
     */
    protected $requirements;
}
