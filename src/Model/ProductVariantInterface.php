<?php

declare(strict_types=1);

namespace Setono\SyliusShippingRequirementsPlugin\Model;

use Sylius\Component\Core\Model\ProductVariantInterface as BaseProductVariantInterface;

interface ProductVariantInterface extends BaseProductVariantInterface, RequirementsAwareInterface
{
}
