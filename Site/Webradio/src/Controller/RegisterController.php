<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserRegisterType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class RegisterController extends BaseController
{

    private $em;

    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(EntityManagerInterface $em, UserPasswordEncoderInterface $encoder)
    {
        $this->em = $em;
        $this->encoder = $encoder;
    }
     /**
     * @Route("/register", name="user_registration")
     */
    //public function register(Request $request): Response
   // {
        /*$content = $request->getContent();

        if(!empty($content)) {

            $params = json_decode($content, true);

            $user = new User();

            $user->setAvatar("<i class='fas fa-user-circle fa-2x text-dark-300'></i>");
            $user->setUsername($params['username']);
            $user->setEmail($params['email']);
            $user->setChannels($params['username']."Sound");
            $user->setRoles("User");
            $hash = $this->encoder->encodePassword($user, $params['password']);
            $user->setPassword($hash);
            $user->setStatus("Active");
            $user->setUpdated_at(new \DateTime());
            $user->setCreatedAt(new \DateTime());
           
            $this->em->persist($user);
            $this->em->flush();

        }

        return $this->responseApi([
            "data" => json_decode($content, true)
        ], 200);*/
    //}

    public function registre() 
    {
        //https://webradio-stream.herokuapp.com/auth/register
        
    }
}
