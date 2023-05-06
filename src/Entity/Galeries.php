<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galeries
 *
 * @ORM\Table(name="galeries")
 * @ORM\Entity
 */
class Galeries
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_galerie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGalerie;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_galerie", type="string", length=255, nullable=false)
     */
    private $titreGalerie;

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

    public function __toString(){
        $var = strval($this->idGalerie);
        return $var;
    }
}
