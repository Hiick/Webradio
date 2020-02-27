<?php

namespace App\Controller\Users;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends BaseController {

    /**
     * @Route("/userdashboard", name="stats")
     */
    public function start(): Response {
        return $this->render('Users/base.html.twig');
    }

}