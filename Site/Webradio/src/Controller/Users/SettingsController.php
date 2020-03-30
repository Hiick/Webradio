<?php

namespace App\Controller\Users;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SettingsController extends BaseController {

    /**
     * @Route("/profile/setting", name="profile.setting.index")
     */
    public function index(): Response {

        return $this->render('Users/Settings/base.html.twig');
    }

    /**
     * @Route("/profile/setting/show", name="profile.setting.show")
     */
    public function showUser(): Response {
        $userJson = file_get_contents('../monks/profile.json');
        $listUser = json_decode($userJson);
       
        return $this->responseApi([$listUser]);
    }
}