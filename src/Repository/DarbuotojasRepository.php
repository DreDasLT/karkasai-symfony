<?php

namespace App\Repository;

use App\Entity\Darbuotojas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Darbuotojas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Darbuotojas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Darbuotojas[]    findAll()
 * @method Darbuotojas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DarbuotojasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Darbuotojas::class);
    }

    // /**
    //  * @return Darbuotojas[] Returns an array of Darbuotojas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Darbuotojas
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
