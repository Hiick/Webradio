<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignalementsController extends BaseController {

    /**
     * @Route("/admin/signalement", name="admin.signalement.index")
     */
    public function index(): Response {
        return $this->render('Dashboard/Signalements/base.html.twig');
    }

    /**
     * @Route("/admin/signalement/users", name="admin.signalement.show")
     */
    public function getUserSignal(): Response {

        $signalJson = file_get_contents('../monks/signalements.json');
        $listsignal = json_decode($signalJson);
       
        return $this->responseApi([$listsignal]);
        
        
    }

    /**
     * @Route("/admin/signalement/listreporting", name="admin.signalement.listreporting", methods="GET")
     */
    public function listReporting(): Response { 

        return $this->render('Dashboard/Signalements/SignalList/ListSignalement.html.twig');
    }

     /**
     * @Route("/admin/signalement/blankpage", name="admin.signalement.blankpage", methods="GET")
     */
    public function blankPage(): Response {

        return $this->render('Dashboard/Signalements/blankPage.html.twig');
    }


    


}











