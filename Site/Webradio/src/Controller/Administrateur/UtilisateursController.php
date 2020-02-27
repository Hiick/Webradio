<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateursController extends BaseController {

    /**
     * @Route("/listusers", name="listusers")
     */
    public function home(): Response {

        return $this->render('Dashboard/Users/base.html.twig');
    }

    public function listUsers():Response {

        $userJson = file_get_contents('../monks/users-login.json');
        $listuser = json_decode($userJson);
       
        return $this->responseApi([$listuser]);
    }



}