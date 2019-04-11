<?php

declare(strict_types=1);

namespace Setono\SyliusShippingRequirementsPlugin\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait RequirementsAwareTrait
{
    /**
     * @var Collection|RequirementInterface[]
     */
    protected $requirements;

    public function __construct()
    {
        $this->requirements = new ArrayCollection();
    }

    public function hasRequirements(): bool
    {
        return !$this->requirements->isEmpty();
    }

    public function getRequirements(): Collection
    {
        return $this->requirements;
    }

    public function addRequirement(RequirementInterface $requirement): void
    {
        if($this->hasRequirement($requirement)) {
            return;
        }

        $this->requirements->add($requirement);
    }

    public function removeRequirement(RequirementInterface $requirement): void
    {
        if(!$this->hasRequirement($requirement)) {
            return;
        }

        $this->requirements->removeElement($requirement);
    }

    public function hasRequirement(RequirementInterface $requirement): bool
    {
        return $this->requirements->contains($requirement);
    }
}
