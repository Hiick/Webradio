<?php 

namespace App\Controller\superAdmin;

use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersAdminController extends BaseController{

    /**
     * @Route("/superadmin/users", name="superadmin.users.index")
     */
    public function index() {
        
        return $this->render('pages/home.html.twig', []);
    }
}