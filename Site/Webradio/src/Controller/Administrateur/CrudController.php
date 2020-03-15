<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CrudController extends BaseController {

    /**
     * @Route("/adminuser", name="adminuser")
     */
    public function getUser(): Response {
        return $this->render('Dashboard/AddUser/base.html.twig');
    }

    public function addNewUser(): Response {
        
        $userJson = file_get_contents('../monks/users-login.json');
        $listuser = json_decode($userJson);
       
        return $this->responseApi([$listuser]);
    }

    public function editUser(Request $request): Response {

        $userId= $request->query->get('id', '1');

        return $this->render('Dashboard/EditUser/base.html.twig');
    }

}