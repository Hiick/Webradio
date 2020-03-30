<?php

namespace App\Controller\Users;


use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlanningController extends BaseController {

    /**
     * @Route("/profile/planning", name="profile.planning.index")
     */
    public function index(): Response {
        return $this->render('Users/Planificiation/base.html.twig');
    }

    /**
     * @Route("/profile/planning/edit", name="profile.planning.edit")
     */
    public function edit(): Response {
        return $this->render('Users/Planificiation/base.html.twig');
    }

    /**
     * @Route("/profile/planning/delete", name="profile.planning.delete")
     */
    public function delete(): Response {
        return $this->render('Users/Planificiation/base.html.twig');
    }

}