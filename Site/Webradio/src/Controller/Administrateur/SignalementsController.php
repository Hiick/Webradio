<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignalementsController extends BaseController {

    /**
     * @Route("/signalements", name="signalements")
     */
    public function listReporting(): Response {
        return $this->render('Dashboard/Signalements/base.html.twig');
    }

}











