<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $objet = null;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Reclam")
     *   @ORM\JoinColumn(name="idrec", referencedColumnName="idr")
     */
    private ?Reclam $idrec = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getIdrec(): ?Reclam
    {
        return $this->idrec;
    }

    public function setIdrec(?Reclam $idrec): self
    {
        $this->idrec = $idrec;

        return $this;
    }
}
