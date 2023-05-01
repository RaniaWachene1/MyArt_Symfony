<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \App\Entity\Users implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'isVerified', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'role', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'nomUser', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'prenomUser', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'telUser', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'dateNaiss', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'img', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'sexe', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'block'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'isVerified', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'role', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'nomUser', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'prenomUser', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'telUser', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'dateNaiss', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'img', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'latitude', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'longitude', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'sexe', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'block'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Users $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function isVerified(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVerified', []);

        return parent::isVerified();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsVerified(bool $isVerified): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsVerified', [$isVerified]);

        return parent::setIsVerified($isVerified);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setRole(string $role): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomUser(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomUser', []);

        return parent::getNomUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomUser(string $nomUser): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomUser', [$nomUser]);

        return parent::setNomUser($nomUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomUser(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomUser', []);

        return parent::getPrenomUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomUser(string $prenomUser): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomUser', [$prenomUser]);

        return parent::setPrenomUser($prenomUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelUser(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelUser', []);

        return parent::getTelUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelUser(int $telUser): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelUser', [$telUser]);

        return parent::setTelUser($telUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaiss(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaiss', []);

        return parent::getDateNaiss();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaiss(\DateTimeInterface $dateNaiss): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaiss', [$dateNaiss]);

        return parent::setDateNaiss($dateNaiss);
    }

    /**
     * {@inheritDoc}
     */
    public function getImg(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImg', []);

        return parent::getImg();
    }

    /**
     * {@inheritDoc}
     */
    public function setImg(string $img): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImg', [$img]);

        return parent::setImg($img);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $imageFile): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$imageFile]);

        parent::setImageFile($imageFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $adresse): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude(?float $latitude): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude(?float $longitude): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexe(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexe', []);

        return parent::getSexe();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexe(string $sexe): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexe', [$sexe]);

        return parent::setSexe($sexe);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlock(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlock', []);

        return parent::getBlock();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlock(string $block): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlock', [$block]);

        return parent::setBlock($block);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticles(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticles', []);

        return parent::getArticles();
    }

    /**
     * {@inheritDoc}
     */
    public function addArticle(\App\Entity\Articles $article): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArticle', [$article]);

        return parent::addArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArticle(\App\Entity\Articles $article): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArticle', [$article]);

        return parent::removeArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
