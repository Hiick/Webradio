<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends BaseController {

    /**
     * @Route("/dashboard", name="stats")
     */
    public function start(): Response {
        return $this->render('Dashboard/base.html.twig');
    }

    public function getStatistics() : Response {

        $statistique = file_get_contents('../monks/adminStatistics.json');
        $listStatistique = json_decode($statistique);
        return $this->responseApi([$listStatistique]);
    }
}