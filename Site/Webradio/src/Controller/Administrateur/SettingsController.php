<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SettingsController extends BaseController {

    /**
     * @Route("/admin/setting", name="admin.setting.index")
     */
    public function index():Response {

        return $this->render('Dashboard/Settings/base.html.twig');
    }

     /**
     * @Route("/admin/setting/{id}", name="admin.setting.edit", methods="GET|POST")
     */
    public function editUser() {
        
    }

    
}