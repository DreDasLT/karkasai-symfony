<?php

namespace App\Repository;

use App\Entity\Abonementas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Abonementas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abonementas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abonementas[]    findAll()
 * @method Abonementas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbonementasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Abonementas::class);
    }

    // /**
    //  * @return Abonementas[] Returns an array of Abonementas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Abonementas
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
