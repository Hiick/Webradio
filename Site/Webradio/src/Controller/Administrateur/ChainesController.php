<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChainesController extends BaseController {

    /**
     * @Route("/admin/channel", name="admin.channel.index")
     */
    public function home():Response {
        return $this->render('Dashboard/Channels/base.html.twig');
    }

    /**
     * @Route("/admin/channel/userschannel", name="admin.channel.show")
     */
    public function allchannels():Response {

        $channelsJson = file_get_contents("../monks/channel_admin.json");
        $listchannels = json_decode($channelsJson);

        return $this->responseApi([$listchannels]);
    }

    /**
     * @Route("/admin/channel/edit", name="admin.channel.edit")
     */
    public function editChannel(): Response {

        return $this->render('Dashboard/Channels/EditChannel/base.html.twig');
    }
    /**
     * @Route("/admin/channel/user", name="admin.channel.user")
     */
    public function getOneUser(): Response {
        $userJson = file_get_contents('../monks/profile.json');
        $listUser = json_decode($userJson);
       
        return $this->responseApi([$listUser]);
    }

    /**
     * @Route("/admin/channel/{id}", name="admin.channel.remove")
     */
    public function removeChannel(Request $request): Response {

        return $this->render('Dashboard/Channels/EditChannel/base.html.twig');
    }

}