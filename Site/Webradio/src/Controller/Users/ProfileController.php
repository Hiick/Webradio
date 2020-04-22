<?php

namespace App\Controller\Users;

use App\Controller\BaseController;
use App\Entity\Users;
use App\Form\UsersType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/profile")
 */
class ProfileController extends BaseController {

    /**
     * @Route("/", name="profile.index")
     */
    public function index(): Response {
        
        return $this->render('Users/base.html.twig');
    }

   
}