<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typereclamation
 *
 * @ORM\Table(name="typereclamation")
 * @ORM\Entity
 */
class Typereclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idtr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtr;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    public function getIdtr(): ?int
    {
        return $this->idtr;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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
    public function __toString(){
        $var = strval($this->idtr);
        return $var;
    }


}
