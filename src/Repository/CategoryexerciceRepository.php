<?php

namespace App\Repository;

use App\Entity\Categoryexercice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Categoryexercice|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categoryexercice|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categoryexercice[]    findAll()
 * @method Categoryexercice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryexerciceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categoryexercice::class);
    }

    // /**
    //  * @return Categoryexercice[] Returns an array of Categoryexercice objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Categoryexercice
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
