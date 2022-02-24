<?php

namespace App\Repository;

use App\Entity\Materiels;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Materiels|null find($id, $lockMode = null, $lockVersion = null)
 * @method Materiels|null findOneBy(array $criteria, array $orderBy = null)
 * @method Materiels[]    findAll()
 * @method Materiels[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MaterielsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Materiels::class);
    }

    // /**
    //  * @return Materiels[] Returns an array of Materiels objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Materiels
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
