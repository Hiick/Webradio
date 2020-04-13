<?php
namespace App\Controller\superAdmin;

use App\Controller\BaseController;
use App\Entity\UserSearch;
use App\Form\UserSearchType;
use App\Repository\SignalementsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/superadmin/signal")
 */
class SignalAdminController extends BaseController{

    private $repository;

    private $em;

    public function __construct(SignalementsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="superadmin.Signalements.index",  methods={"GET","POST"})
     */
    public function index(PaginatorInterface $paginator, Request $request) {
        
        $search = new UserSearch();
        $form = $this->createForm(UserSearchType::class, $search);
        $form->handleRequest($request);

        $Signalements = $paginator->paginate($this->repository->findAllVisibleQuery($search),
        $request->query->getInt('page', 1), 5);

        return $this->render('superadmin/Signalements/base.html.twig', [
            'Signalements' => $Signalements,
            'form' => $form->createView(),
        ]);
    }
}