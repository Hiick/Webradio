<?php

namespace App\Controller\Users;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RadiosController extends BaseController {

    /**
     * @Route("/profile/radio", name="profile.radios.index")
     */
    public function start(): Response {
        
        return $this->render('Users/Radios/base.html.twig');
    }
    
    /**
     * @Route("/profile/radios", name="profile.radios.show")
     */
    public function getAllRadio(): Response {
        $radioJson = file_get_contents('../monks/radios.json');
        $listRadio = json_decode($radioJson);
       
        return $this->responseApi([$listRadio]);
    }

}