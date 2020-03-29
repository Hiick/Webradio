<?php

namespace App\Controller\Administrateur;

use App\Controller\BaseController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminUserController extends BaseController {

    /**
     * @Route("/adminuser", name="adminuser.users.index")
     */

    public function index(): Response {
        return $this->render('Dashboard/AdminUser/base.html.twig');
    }

    /**
    * @Route("/adminuser/channel", name="adminuser.channel.show")
    */
    public function getchannel(): Response {
        return $this->render('Dashboard/AdminUser/base.html.twig');
    }

        /**
    * @Route("/adminuser/channel/edit", name="adminuser.channel.edit")
    */
    public function editUser(): Response {
        return $this->render('Dashboard/AdminUser/base.html.twig');
    }

        /**
    * @Route("/adminuser/channel/{id}", name="adminuser.channel.remove")
    */
    public function removeUser(): Response {
        return $this->render('Dashboard/AdminUser/base.html.twig');
    }


}