<?php

declare(strict_types=1);

namespace Setono\SyliusShippingRequirementsPlugin\Model;

use Sylius\Component\Core\Model\ShippingMethodInterface as BaseShippingMethodInterface;

interface ShippingMethodInterface extends BaseShippingMethodInterface, RequirementsAwareInterface
{
    public function getMinVolume(): ?int;

    public function getMaxVolume(): ?int;

    public function getMinWeight(): ?int;

    public function getMaxWeight(): ?int;
}
