<?php

namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends BaseController {

    /**
     * @Route("", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response {

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername =  $authenticationUtils->getLastUsername();
   
        return $this->render('pages/home.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);

    }

}