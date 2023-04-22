<?php

namespace App\Entity;

use App\Repository\ReclamRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamRepository::class)]
class Reclam
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idr = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dater = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Users")
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     */
    private ?Users $idUser = null;


    /**
     *
     * @ORM\ManyToOne(targetEntity="Typereclamation")
     *   @ORM\JoinColumn(name="idtyper", referencedColumnName="idtr")
     */
    private ?Typereclamation $idtyper = null;

    public function getIdr(): ?int
    {
        return $this->idr;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDater(): ?\DateTimeInterface
    {
        return $this->dater;
    }

    public function setDater(\DateTimeInterface $dater): self
    {
        $this->dater = $dater;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdUser(): ?Users
    {
        return $this->idUser;
    }

    public function setIdUser(?Users $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }
    public function __toString(){
        $var = strval($this->idr);
        return $var;
    }

    public function getIdtyper(): ?Typereclamation
    {
        return $this->idtyper;
    }

    public function setIdtyper(?Typereclamation $idtyper): self
    {
        $this->idtyper = $idtyper;

        return $this;
    }


}
