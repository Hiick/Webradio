<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminUserController extends BaseController {

    /**
     * @Route("/adminuser", name="adminuser")
     */
    public function home(): Response {
        return $this->render('Dashboard/AdminUser/base.html.twig');
    }

}