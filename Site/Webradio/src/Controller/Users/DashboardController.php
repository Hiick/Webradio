<?php

namespace App\Controller\Users;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends BaseController {

    /**
     * @Route("/user", name="user.dashboard.stats")
     */
    public function index(): Response {
        return $this->render('Users/base.html.twig');
    }

}