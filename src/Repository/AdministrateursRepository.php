<?php

namespace App\Repository;

use App\Entity\Administrateurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Administrateurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Administrateurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Administrateurs[]    findAll()
 * @method Administrateurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdministrateursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Administrateurs::class);
    }

    // /**
    //  * @return Administrateurs[] Returns an array of Administrateurs objects
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
    public function findOneBySomeField($value): ?Administrateurs
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
