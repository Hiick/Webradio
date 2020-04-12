<?php
namespace App\Entity;

class UserSearch {

    /**
     * @var string|null
     */
    private $username;

    /**
    * @var string|null
    */
    private $nom_chaine;


    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): UserSearch
    {
        $this->username = $username;
        return $this;
    }

    public function getNomChaine(): ?string
    {
        return $this->nom_chaine;
    }

    public function setNomChaine(string $nom_chaine): UserSearch
    {
        $this->nom_chaine = $nom_chaine;
        return $this;
    }


}