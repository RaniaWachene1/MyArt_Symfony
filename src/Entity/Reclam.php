<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
//use Vich\UploaderBundle\Entity\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Reclam
 *
 * @ORM\Table(name="reclam", indexes={@ORM\Index(name="fk_reclamtype", columns={"idtyper"}), @ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 *
 */
#[Vich\Uploadable]
class Reclam
{
    /**
     * @var int
     *
     * @ORM\Column(name="idr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idr;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Please enter title")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=false)
     *@Assert\NotBlank(message="Please enter description")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=500, nullable=true)
     */
    private $image;
    /**
     *
     *
     * @var File
     *
     */
    #[Vich\UploadableField(mapping: 'images' , fileNameProperty:"image")]
    private $imageFile;

    /**
     * @return File
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param File $imageFile
     */
    public function setImageFile(File $imageFile): void
    {
        $this->imageFile = $imageFile;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dater", type="date", nullable=false)
     */
    private $dater;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

    /**
     * @var \Typereclamation
     *
     * @ORM\ManyToOne(targetEntity="Typereclamation",cascade={"detach"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtyper", referencedColumnName="idtr")
     * })
     * @Assert\NotBlank(message="Please choose claim's type")
     */
    private $idtyper;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users",cascade={"detach"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

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

    public function getIdtyper(): ?Typereclamation
    {
        return $this->idtyper;
    }

    public function setIdtyper(?Typereclamation $idtyper): self
    {
        $this->idtyper = $idtyper;

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
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function uploadImage()
    {
        if ($this->imageFile instanceof UploadedFile) {
            $fileName = $this->imageFile->getClientOriginalName();
            $this->imageFile->move($this->getUploadRootDir(), $fileName);
            $this->setImage($fileName);
        }
    }

    public function getUploadRootDir()
    {
        return __DIR__ . '/../../public/images';
    }
    public function __toString(){
        $var = strval($this->idr);
        return $var;
    }

}
