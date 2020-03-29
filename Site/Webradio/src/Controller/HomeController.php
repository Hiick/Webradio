<?php

namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends BaseController {

    /**
     * @Route("/", name="home.index")
     */
    public function home(): Response {

        $radioJson = file_get_contents('../monks/radios.json');
        $listRadio = json_decode($radioJson);
       
    //return $this->responseApi([$listRadio]);
    return $this->render('HomePage/base.html.twig');
    }

}