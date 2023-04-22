<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[Vich\Uploadable]
class Users implements UserInterface, PasswordAuthenticatedUserInterface,\Serializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"id_user")]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    /**
     * @Assert\NotBlank(message="Please enter your email")
     * @Assert\Email (message="Invalid mail!")
     */

    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];
    private string $role;
    /**
     * @var string The hashed password
     * @Assert\Regex(
     *     pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{1,8}$/",
     *     message="The password should contain at least one uppercase letter, numbers, lowercase letters, and special characters, and be longer than 8 characters"
     * )
     *  @Assert\NotBlank(message="Please enter a password")
     */
    #[ORM\Column(name:"pwd_user")]
    private ?string $password = null;

    #[ORM\Column(length: 255,name:"nom_user")]
    /**
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]+$/",
     *     message="Last should contain only alphabetical letters"
     * )
     * @Assert\NotBlank(message="Lasttname can't be empty")
     */
    private ?string $nomUser = null;

    #[ORM\Column(length: 255,name:"prenom_user")]
    /**
     * @Assert\Regex(
     *     pattern="/^[a-zA-Z]+$/",
     *     message="Firstname should contain only alphabetical letters"
     * )
     * @Assert\NotBlank(message="Firstname can't be empty")
     */
    private ?string $prenomUser = null;

    #[ORM\Column(name:"tel_user")]
    /**
     * @Assert\Regex(
     *     pattern="/^\d{8}$/",
     *     message="The phone number should be exactly 8 digits"
     * )
     * @Assert\NotBlank(message="Please enter your phone number")
     *
     */
    private ?int $telUser = null;

    #[ORM\Column(type: Types::DATE_MUTABLE,name:"date_naiss")]
    /**
     * @Assert\LessThanOrEqual("-18 years", message="You must be at least 18 years old.")
     * @Assert\NotBlank(message="Please enter your birth date")
     */
    private ?\DateTimeInterface $dateNaiss = null;

    #[ORM\Column(length: 255,nullable:true)]
    private ?string $img = null;
    #[Vich\UploadableField(mapping: 'images' , fileNameProperty:"img")]

    private $imageFile;
    #[ORM\Column(length: 255)]
    /**
     * @Assert\NotBlank(message="Please enter your adress")
     *
     */
    private ?string $adresse = null;
    #[ORM\Column(nullable: true)]
    private ?float $latitude = null;

    #[ORM\Column(nullable: true)]
    private ?float $longitude = null;

    #[ORM\Column(length: 255)]
    /**
     * @Assert\NotBlank(message="Please choose your sexe")
     *
     */
    private ?string $sexe = null;

    #[ORM\Column(length: 255)]
    private ?string $block = 'unBlock';
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $blockedAt;

    public function isBlocked(): bool
    {
        return $this->blockedAt && $this->blockedAt > new \DateTimeImmutable('-2 hours');
    }

    public function setBlocked(bool $blocked): void
    {
        if ($blocked) {
            $this->blockedAt = new \DateTimeImmutable();
        } else {
            $this->blockedAt = null;
        }
    }

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): self
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getPrenomUser(): ?string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(string $prenomUser): self
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    public function getTelUser(): ?int
    {
        return $this->telUser;
    }

    public function setTelUser(int $telUser): self
    {
        $this->telUser = $telUser;

        return $this;
    }

    public function getDateNaiss(): ?\DateTimeInterface
    {
        return $this->dateNaiss;
    }

    public function setDateNaiss(\DateTimeInterface $dateNaiss): self
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }
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
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @param float|null $latitude
     */
    public function setLatitude(?float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * @param float|null $longitude
     */
    public function setLongitude(?float $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getBlock(): ?string
    {
        return $this->block;
    }

    public function setBlock(string $block): self
    {
        $this->block = $block;

        return $this;
    }

    /**
     * @return Collection<int, Articles>
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Articles $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles->add($article);
            $article->setUser($this);
        }

        return $this;
    }

    public function removeArticle(Articles $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getUser() === $this) {
                $article->setUser(null);
            }
        }

        return $this;
    }
    public function serialize()
    {return serialize(array(
        $this->id,
        $this->nomUser,
        $this->prenomUser,
        $this->dateNaiss,
        $this->email,
        $this->adresse,
        $this->telUser,
        $this->sexe,
        $this->roles,
        $this->block,
        $this->password,));


    }

    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->nomUser,
            $this->prenomUser,
            $this->dateNaiss,
            $this->email,
            $this->adresse,
            $this->telUser,
            $this->sexe,
            $this->roles,
            $this->block,
            $this->password,
            ) = unserialize($serialized);
    }
    public function __toString(){
        $var = strval($this->id);
        return $var;
    }
}
