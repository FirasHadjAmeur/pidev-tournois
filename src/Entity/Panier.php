<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $qteProd;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $totalPanier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQteProd(): ?int
    {
        return $this->qteProd;
    }

    public function setQteProd(?int $qteProd): self
    {
        $this->qteProd = $qteProd;

        return $this;
    }

    public function getTotalPanier(): ?float
    {
        return $this->totalPanier;
    }

    public function setTotalPanier(?float $totalPanier): self
    {
        $this->totalPanier = $totalPanier;

        return $this;
    }
}
