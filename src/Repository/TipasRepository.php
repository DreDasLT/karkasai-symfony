<?php

namespace App\Repository;

use App\Entity\Tipas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Tipas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tipas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tipas[]    findAll()
 * @method Tipas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tipas::class);
    }

    // /**
    //  * @return Tipas[] Returns an array of Tipas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tipas
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
