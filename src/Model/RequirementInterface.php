<?php

declare(strict_types=1);

namespace Setono\SyliusShippingRequirementsPlugin\Model;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

interface RequirementInterface extends ResourceInterface, CodeAwareInterface
{
    public function getId(): ?int;
}
