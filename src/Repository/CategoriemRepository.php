<?php

namespace App\Repository;

use App\Entity\Categoriem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Categoriem|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categoriem|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categoriem[]    findAll()
 * @method Categoriem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categoriem::class);
    }

    // /**
    //  * @return Categoriem[] Returns an array of Categoriem objects
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
    public function findOneBySomeField($value): ?Categoriem
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
