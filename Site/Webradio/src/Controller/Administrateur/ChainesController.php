<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChainesController extends BaseController {

    /**
     * @Route("/chaines", name="Chaines")
     */
    public function home():Response {
        return $this->render('Dashboard/Channels/base.html.twig');
    }

    public function allchannels():Response {

        $channelsJson = file_get_contents("../monks/channels.json");
        $listchannels = json_decode($channelsJson);

        return $this->responseApi([$listchannels]);
    }

}