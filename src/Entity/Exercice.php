<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExerciceRepository::class)
 */
class Exercice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrset;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categoryexercice", inversedBy="exercices")
     */
    private $categoryexercice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @return mixed
     */
    public function getCategoryexercice()
    {
        return $this->categoryexercice;
    }

    /**
     * @param mixed $categoryexercice
     */
    public function setCategoryexercice($categoryexercice): void
    {
        $this->categoryexercice = $categoryexercice;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNbrset(): ?int
    {
        return $this->nbrset;
    }

    public function setNbrset(int $nbrset): self
    {
        $this->nbrset = $nbrset;

        return $this;
    }
    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
    public function __toString() {
        return $this->name;
    }
}
