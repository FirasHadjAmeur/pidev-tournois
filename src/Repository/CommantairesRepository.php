<?php

namespace App\Repository;

use App\Entity\Commantaires;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Commantaires|null find($id, $lockMode = null, $lockVersion = null)
 * @method Commantaires|null findOneBy(array $criteria, array $orderBy = null)
 * @method Commantaires[]    findAll()
 * @method Commantaires[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommantairesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Commantaires::class);
    }

    // /**
    //  * @return Commantaires[] Returns an array of Commantaires objects
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
    public function findOneBySomeField($value): ?Commantaires
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
