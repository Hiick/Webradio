<?php

namespace App\Controller\Users;

use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends BaseController {

    /**
     * @Route("/profile", name="profile.index")
     */
    public function index(): Response {
        
        return $this->render('Users/base.html.twig');
    }

}