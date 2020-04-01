<?php

namespace App\Controller\Users;

use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminUserController extends BaseController {

    /**
     * @Route("/profile", name="profile.index")
     */
    public function index(): Response {
        return $this->render('Users/base.html.twig');
    }
    
    /**
     * @Route("/profile/banni", name="profile.banni")
     */
    public function getUser(): Response {

        return $this->render('Users/Banni/base.html.twig');
    }
    /**
     * @Route("/profile/page", name="profile.page")
     */
    public function messagePage(): Response {

        return $this->render('Users/Banni/pagebanni.html.twig');
    }

}