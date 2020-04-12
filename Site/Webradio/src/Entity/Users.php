<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Serializable;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users implements UserInterface, Serializable
{
    const DefaultStatus = [
        0 => 'Inactive',
        1 => 'Active'
    ];
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avatar;

    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomChaine;

   /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $roleUser;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

     /**
     * @ORM\Column(type="string", length=255,  options={"default": true})
     */
    private $password;

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNomChaine(): ?string
    {
        return $this->nomChaine;
    }

    public function setNomChaine(string $nomChaine): self
    {
        $this->nomChaine = $nomChaine;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDefaultStatus(): string
    {
        return self::DefaultStatus[$this->status];
    }

    /**
     * Returns the roles granted to the user.
     *
     *     public function getRoles()
     *     {
     *         return ['ROLE_USER'];
     *     }
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return string[] The user roles
     */
    public function getRoles(){
        return ['USER', 'ADMIN'];
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername() : ?string {
        return $this->username;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials(){}

    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->email,
            $this->password 
        ]);
    }

    /**
     * @param string $serialized
     * 
     * @return void
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->email,
            $this->password
        ) = unserialize($serialized, ['allowed_classes' => false]);

    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getRoleUser():  ?string
    {
        return $this->roleUser;
    }
    public function setroleUser(string $roleUser): self
    {
        $this->roleUser = $roleUser;

        return $this;
    }
}
