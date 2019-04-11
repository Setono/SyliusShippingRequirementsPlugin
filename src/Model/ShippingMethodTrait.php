<?php

declare(strict_types=1);

namespace Setono\SyliusShippingRequirementsPlugin\Model;

use Doctrine\ORM\Mapping as ORM;

trait ShippingMethodTrait
{
    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $minVolume;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $maxVolume;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $minWeight;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $maxWeight;

    public function getMinVolume(): ?int
    {
        return $this->minVolume;
    }

    public function setMinVolume(?int $minVolume): void
    {
        $this->minVolume = $minVolume;
    }

    public function getMaxVolume(): ?int
    {
        return $this->maxVolume;
    }

    public function setMaxVolume(?int $maxVolume): void
    {
        $this->maxVolume = $maxVolume;
    }

    public function getMinWeight(): ?int
    {
        return $this->minWeight;
    }

    public function setMinWeight(?int $minWeight): void
    {
        $this->minWeight = $minWeight;
    }

    public function getMaxWeight(): ?int
    {
        return $this->maxWeight;
    }

    public function setMaxWeight(?int $maxWeight): void
    {
        $this->maxWeight = $maxWeight;
    }
}
