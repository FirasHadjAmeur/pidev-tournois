<?php

namespace App\Entity;

use App\Repository\EquipesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=EquipesRepository::class)
 */
class Equipes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */
    private $nom;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\PositiveOrZero
     */
    private $nbrVictoire;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\PositiveOrZero
     */
    private $nbrPerdre;

    /**
     * @ORM\Column(type="integer", nullable=false)
     * @Assert\PositiveOrZero
     */
    private $nbrNulle;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $logo;

    /**
     * @ORM\ManyToOne(targetEntity=Matchs::class, inversedBy="equipe")
     */
    private $matchs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNbrVictoire(): ?int
    {
        return $this->nbrVictoire;
    }

    public function setNbrVictoire(?int $nbrVictoire): self
    {
        $this->nbrVictoire = $nbrVictoire;

        return $this;
    }

    public function getNbrPerdre(): ?int
    {
        return $this->nbrPerdre;
    }

    public function setNbrPerdre(?int $nbrPerdre): self
    {
        $this->nbrPerdre = $nbrPerdre;

        return $this;
    }

    public function getNbrNulle(): ?int
    {
        return $this->nbrNulle;
    }

    public function setNbrNulle(?int $nbrNulle): self
    {
        $this->nbrNulle = $nbrNulle;

        return $this;
    }

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getMatchs(): ?Matchs
    {
        return $this->matchs;
    }

    public function setMatchs(?Matchs $matchs): self
    {
        $this->matchs = $matchs;

        return $this;
    }
}
