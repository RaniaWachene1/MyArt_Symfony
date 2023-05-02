<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Favoris
 *
 * @ORM\Table(name="favoris")
 * @ORM\Entity
 */
class Favoris
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Articles", inversedBy="idFavoris")
     * @ORM\JoinTable(name="favoris_article",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_favoris", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_article", referencedColumnName="id_article")
     *   }
     * )
     */
    private $idArticle = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idArticle = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Articles>
     */
    public function getIdArticle(): Collection
    {
        return $this->idArticle;
    }

    public function addIdArticle(Articles $idArticle): self
    {
        if (!$this->idArticle->contains($idArticle)) {
            $this->idArticle->add($idArticle);
        }

        return $this;
    }

    public function removeIdArticle(Articles $idArticle): self
    {
        $this->idArticle->removeElement($idArticle);

        return $this;
    }

}
