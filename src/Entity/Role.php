<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;

    /**
     * @var string|null
     *
     * @ORM\Column(name="desc_role", type="string", length=15, nullable=true)
     */
    private $descRole;

    public function getIdRole(): ?int
    {
        return $this->idRole;
    }

    public function getDescRole(): ?string
    {
        return $this->descRole;
    }

    public function setDescRole(?string $descRole): self
    {
        $this->descRole = $descRole;

        return $this;
    }


}
