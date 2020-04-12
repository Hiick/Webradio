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
    private $nomChaine;


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
        return $this->nomChaine;
    }

    public function setNomChaine(string $nomChaine): UserSearch
    {
        $this->nomChaine = $nomChaine;
        return $this;
    }


}