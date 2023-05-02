<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PanierArticles
 *
 * @ORM\Table(name="panier_articles", indexes={@ORM\Index(name="fk_panierarticle2", columns={"id_panier"})})
 * @ORM\Entity
 */
class PanierArticles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_article", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idArticle;

    /**
     * @var int
     *
     * @ORM\Column(name="id_panier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPanier;


}
