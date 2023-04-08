<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Articles
 *
 * @ORM\Table(name="articles", uniqueConstraints={@ORM\UniqueConstraint(name="id_article", columns={"id_article"})}, indexes={@ORM\Index(name="FKAG", columns={"id_galerie"})})
 * @ORM\Entity
 */
#[Vich\Uploadable]
class Articles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_article", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_article", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Please enter the article title")
     */
    private $titreArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_artiste", type="string", length=255, nullable=false)
     * * @Assert\Regex(
     *     pattern="/^[a-zA-Z]+$/",
     *     message="Artist name should contain only alphabetical letters"
     * )
     * @Assert\NotBlank(message="Please enter the artist  name")
     */
    private $nomArtiste;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_article", type="float", precision=10, scale=0, nullable=false)
     * @Assert\NotBlank(message="Please enter the article price")
     * @Assert\Positive(message="The price should be greater than zero")
     * @Assert\Regex("/^[0-9]+(\.[0-9]+)?$/")
     * 
     */
    private $prixArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_article", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Please enter the article desciption")
     * @Assert\Length(max=255)
     */
    private $descArticle;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_article", type="integer", nullable=false)
     * @Assert\NotBlank(message="Please enter the article quantity")
     * @Assert\Positive(message="The quantity should be greater than zero")
     */
    private $quantiteArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_article", type="string", length=255, nullable=false)
     * 
     */
    private $photoArticle;
    #[Vich\UploadableField(mapping: 'articles' , fileNameProperty:"photoArticle")]
    /**
     * @var File|null
     * @Assert\NotBlank(message="Please enter the article file")
     * 
     */
    private $fileFile;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer", nullable=false)
     */
    private $rate;

    /**
     * @var \Galeries
     *
     * @ORM\ManyToOne(targetEntity="Galeries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_galerie", referencedColumnName="id_galerie")
     * })
     *  @Assert\NotBlank(message="Please choose a gallery")
     */
    private $idGalerie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Panier", inversedBy="idArticle")
     * @ORM\JoinTable(name="panier_articles",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_article", referencedColumnName="id_article")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_panier", referencedColumnName="id_panier")
     *   }
     * )
     */
    private $idPanier = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPanier = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
    public function setFileFile(?File $fileFile = null): void
    {
        $this->fileFile = $fileFile;

    }

    public function getFileFile(): ?File
    {
        return $this->fileFile;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

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

    /**
     * @return Collection<int, Panier>
     */
    public function getIdPanier(): Collection
    {
        return $this->idPanier;
    }

    public function addIdPanier(Panier $idPanier): self
    {
        if (!$this->idPanier->contains($idPanier)) {
            $this->idPanier->add($idPanier);
        }

        return $this;
    }

    public function removeIdPanier(Panier $idPanier): self
    {
        $this->idPanier->removeElement($idPanier);

        return $this;
    }

}
