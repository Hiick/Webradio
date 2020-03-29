<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CrudController extends BaseController {

    /**
     * @Route("/admin/adminuser", name="admin.adminuser.index")
     */
    public function getUser(): Response {
        return $this->render('Dashboard/Users/AddUser/base.html.twig');
    }

    /**
     * @Route("/admin/adminuser/create", name="admin.adminuser.create")
     */
    public function addNewUser(): Response {
        
        $userJson = file_get_contents('../monks/users-login.json');
        $listuser = json_decode($userJson);
       
        return $this->responseApi([$listuser]);
    }

    /**
     * @Route("/admin/user/edits", name="admin.adminuser.edit")
     */
    public function editUser(): Response {

        return $this->render('Dashboard/Users/EditUser/base.html.twig');
    }



}