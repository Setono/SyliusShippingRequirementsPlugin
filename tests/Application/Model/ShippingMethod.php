<?php

declare(strict_types=1);

namespace Tests\Setono\SyliusShippingRequirementsPlugin\Application\Model;

use Doctrine\ORM\Mapping as ORM;
use Setono\SyliusShippingRequirementsPlugin\Model\RequirementsAwareTrait;
use Setono\SyliusShippingRequirementsPlugin\Model\ShippingMethodInterface;
use Setono\SyliusShippingRequirementsPlugin\Model\ShippingMethodTrait;
use Sylius\Component\Core\Model\ShippingMethod as BaseShippingMethod;

/**
 * @ORM\Entity()
 * @ORM\Table(name="sylius_shipping_method")
 */
class ShippingMethod extends BaseShippingMethod implements ShippingMethodInterface
{
    use RequirementsAwareTrait, ShippingMethodTrait;

    /**
     * @ORM\ManyToMany(targetEntity="Setono\SyliusShippingRequirementsPlugin\Model\RequirementInterface")
     * @ORM\JoinTable(name="setono_sylius_shipping_requirements__shipping_method_requirements",
     *      joinColumns={@ORM\JoinColumn(name="requirement_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="shipping_method_id", referencedColumnName="id", unique=true)}
     * )
     */
    protected $requirements;
}
