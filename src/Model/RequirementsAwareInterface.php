<?php

declare(strict_types=1);

namespace Setono\SyliusShippingRequirementsPlugin\Model;

use Doctrine\Common\Collections\Collection;

interface RequirementsAwareInterface
{
    public function hasRequirements(): bool;

    /**
     * @return Collection|RequirementInterface[]
     */
    public function getRequirements(): Collection;

    public function addRequirement(RequirementInterface $requirement): void;

    public function removeRequirement(RequirementInterface $requirement): void;

    public function hasRequirement(RequirementInterface $requirement): bool;
}
