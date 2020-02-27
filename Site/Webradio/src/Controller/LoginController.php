<?php

namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LoginController extends BaseController {

    /**
     * @Route("/login", name="login")
     */
    public function login(): Response {

        $radioJson = file_get_contents('../monks/radios.json');
        $listRadio = json_decode($radioJson);
       
    //return $this->responseApi([$listRadio]);
    return $this->render('LoginPage/base.html.twig');
    }

}