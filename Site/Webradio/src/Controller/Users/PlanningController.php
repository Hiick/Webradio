<?php

namespace App\Controller\Users;


use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlanningController extends BaseController {

    /**
     * @Route("/planning", name="planification")
     */
    public function start(): Response {
        return $this->render('Users/Planificiation/base.html.twig');
    }

}