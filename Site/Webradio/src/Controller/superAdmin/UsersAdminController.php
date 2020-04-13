<?php 

namespace App\Controller\superAdmin;

use App\Controller\BaseController;
use App\Entity\Users;
use App\Entity\UserSearch;
use App\Form\UserSearchType;
use App\Form\UsersType;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface; 

/**
 * @Route("/superadmin/users")
 */
class UsersAdminController extends BaseController{

    private $repository;

    private $em;

    public function __construct(UsersRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="superadmin.users.index", methods={"GET","POST"})
     */
    public function index(PaginatorInterface $paginator, Request $request) {
        
        $search = new UserSearch();
        $form = $this->createForm(UserSearchType::class, $search);
        $form->handleRequest($request);

        $user = $paginator->paginate($this->repository->findAllVisibleQuery($search),
        $request->query->getInt('page', 1), 5);

        return $this->render('superadmin/users/base.html.twig', [
            'users' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/new", name="superadmin.users.new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('superadmin.users.index');
        }

        return $this->render('superadmin/users/addUser/newUser.html.twig', [
            'users' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="superadmin.users.edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Users $user): Response
    {
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('superadmin.users.index');
        }

        return $this->render('superAdmin/users/editUser/editUser.html.twig', [
            'users' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="superadmin.users.delete", methods={"DELETE"})
     */
    public function delete(Request $request, Users $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('superadmin.users.index');
    }

     /**
     * @Route("/notifications", name="superadmin.notifications.index", methods={"GET"})
     */
    public function notification(): Response {

        return $this->render('superAdmin/notifications/base.html.twig');
    }

}