<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UsersFixtures extends Fixture
{
   
    public function load(ObjectManager $manager)
    {
        $usersJson = file_get_contents(dirname(__DIR__).'/monks/users-login.json');

        $data = json_decode($usersJson, true);
        //dump($data['radios'][0]["id"]);

        foreach($data['users'] as $result)
        {
            //dump($result["nom_chaine"]);
           
            $users = new Users();
            $users->setEmail($result['email']);
            $users->setUsername($result['username']);
            $users->setAvatar($result['avatar']);
            $users->setNomChaine($result['nom_chaine']);
            $users->setRoleUser($result['role']);
            $users->setStatus($result['status']);
            $users->setPassword($result['password']);

            $manager->persist($users);
        }
        $manager->flush();
    }
}
