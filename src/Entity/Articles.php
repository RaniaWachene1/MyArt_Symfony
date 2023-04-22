<?php

namespace App\Entity;

use App\Repository\ArticlesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticlesRepository::class)]
class Articles
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idArticle = null;

    #[ORM\Column(length: 255)]
    private ?string $titreArticle = null;

    #[ORM\Column(length: 255)]
    private ?string $nomArtiste = null;

    #[ORM\Column]
    private ?float $prixArticle = null;

    #[ORM\Column(length: 255)]
    private ?string $descArticle = null;

    #[ORM\Column]
    private ?int $quantiteArticle = null;

    #[ORM\Column(length: 255)]
    private ?string $photoArticle = null;

    #[ORM\Column]
    private ?int $rate = null;



    /**
     * @ORM\ManyToOne(targetEntity="Galeries")
     *@ORM\JoinColumn(name="id_galerie", referencedColumnName="id_galerie")
     */
    private ?Galeries $idGalerie = null;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Users")
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     */
    private ?Users $idUser = null;


    public function getIdArticle(): ?int
    {
        return $this->idArticle;
    }

    public function getTitreArticle(): ?string
    {
        return $this->titreArticle;
    }

    public function setTitreArticle(string $titreArticle): self
    {
        $this->titreArticle = $titreArticle;

        return $this;
    }

    public function getNomArtiste(): ?string
    {
        return $this->nomArtiste;
    }

    public function setNomArtiste(string $nomArtiste): self
    {
        $this->nomArtiste = $nomArtiste;

        return $this;
    }

    public function getPrixArticle(): ?float
    {
        return $this->prixArticle;
    }

    public function setPrixArticle(float $prixArticle): self
    {
        $this->prixArticle = $prixArticle;

        return $this;
    }

    public function getDescArticle(): ?string
    {
        return $this->descArticle;
    }

    public function setDescArticle(string $descArticle): self
    {
        $this->descArticle = $descArticle;

        return $this;
    }

    public function getQuantiteArticle(): ?int
    {
        return $this->quantiteArticle;
    }

    public function setQuantiteArticle(int $quantiteArticle): self
    {
        $this->quantiteArticle = $quantiteArticle;

        return $this;
    }

    public function getPhotoArticle(): ?string
    {
        return $this->photoArticle;
    }

    public function setPhotoArticle(string $photoArticle): self
    {
        $this->photoArticle = $photoArticle;

        return $this;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }


    public function getIdGalerie(): ?Galeries
    {
        return $this->idGalerie;
    }

    public function setIdGalerie(?Galeries $idGalerie): self
    {
        $this->idGalerie = $idGalerie;

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


}
