<?php

namespace App\Entity;

use App\Repository\GaleriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GaleriesRepository::class)]
class Galeries
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idGalerie = null;

    #[ORM\Column(length: 255)]
    private ?string $titreGalerie = null;


    public function getIdGalerie(): ?int
    {
        return $this->idGalerie;
    }



    public function getTitreGalerie(): ?string
    {
        return $this->titreGalerie;
    }

    public function setTitreGalerie(string $titreGalerie): self
    {
        $this->titreGalerie = $titreGalerie;

        return $this;
    }
}
