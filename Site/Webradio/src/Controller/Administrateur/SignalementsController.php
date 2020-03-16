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
    public function home(): Response {
        return $this->render('Dashboard/Signalements/base.html.twig');
    }

    public function getUserSignal(): Response {

        $signalJson = file_get_contents('../monks/signalements.json');
        $listsignal = json_decode($signalJson);
       
        return $this->responseApi([$listsignal]);
        
        
    }
    public function listReporting(): Response { 

        return $this->render('Dashboard/Signalements/ListSignalement.html.twig');
    }

    public function blankPage(): Response {

        return $this->render('Dashboard/Signalements/blankPage.html.twig');
    }


    


}











