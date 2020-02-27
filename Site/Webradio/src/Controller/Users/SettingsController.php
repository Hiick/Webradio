<?php

namespace App\Controller\Users;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SettingsController extends BaseController {

    public function accountSetting (): Response {

        return $this->render('Users/Settings/base.html.twig');
    }
}