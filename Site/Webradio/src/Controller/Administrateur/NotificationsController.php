<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotificationsController extends BaseController {


    /**
     * @Route("/admin/notification", name="admin.notifications.index")
     */
    public function index(): Response {
        
        return $this->render('Dashboard/Notifications/base.html.twig');
    }

    /**
     * @Route("/admin/notification/{id}", name="admin.notifications.sendnotif")
     */
    public function sendNotif(): Response {
        
        return $this->render('Dashboard/Notifications/base.html.twig');
    }
}