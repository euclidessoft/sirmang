<?php

namespace App\Repository;

use App\Entity\Depensecellule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Depensecellule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Depensecellule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Depensecellule[]    findAll()
 * @method Depensecellule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepensecelluleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Depensecellule::class);
    }

    // /**
    //  * @return Depensecellule[] Returns an array of Depensecellule objects
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
    public function findOneBySomeField($value): ?Depensecellule
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
