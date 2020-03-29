<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateursController extends BaseController {

    /**
     * @Route("/admin/user", name="admin.users.index")
     */
    public function index(): Response {

        return $this->render('Dashboard/Users/base.html.twig');
    }

    /**
     * @Route("/admin/users", name="admin.users.show")
     */
    public function listUsers():Response {

        $userJson = file_get_contents('../monks/users-login.json');
        $listuser = json_decode($userJson);
       
        return $this->responseApi([$listuser]);
    }



}