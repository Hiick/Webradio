<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends BaseController {

    /**
     * @Route("/admin", name="admin.dashboard.index")
     */
    public function index(): Response {
        return $this->render('Dashboard/base.html.twig');
    }

    /**
     * @Route("/admin/stats", name="admin.stats.show")
     */
    public function getStatistics() : Response {

        $statistique = file_get_contents('../monks/adminStatistics.json');
        $listStatistique = json_decode($statistique);
        return $this->responseApi([$listStatistique]);
    }
}