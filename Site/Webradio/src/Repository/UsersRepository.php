<?php

namespace App\Repository;

use App\Entity\Users;
use App\Entity\UserSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder as ORMQueryBuilder;

/**
 * @method Users|null find($id, $lockMode = null, $lockVersion = null)
 * @method Users|null findOneBy(array $criteria, array $orderBy = null)
 * @method Users[]    findAll()
 * @method Users[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Users::class);
    }

    public function findAllVisibleQuery(UserSearch $search): Query
    {
        $query = $this->findVisibleQuery();

        if($search->getUsername()){
            $query = $query
                ->andWhere('u.username = :username')
                ->setParameter(':username', $search->getUsername());
        }

        if($search->getNomChaine()) {
            $query = $query
                ->andWhere('u.nomChaine = :nomChaine')
                ->setParameter(':nomChaine', $search->getNomChaine());
        }

        return $query->setMaxResults(4)
                ->getQuery();
    }

    /**
     * @return Users[]
     */
    public function findLastest() :array
    {
        return $this->findVisibleQuery()
        ->setMaxResults(4)
        ->getQuery()
        ->getResult()
        ;
    }

    private function findVisibleQuery() :ORMQueryBuilder
    {
        return $this->createQueryBuilder('u');       
    }
}
