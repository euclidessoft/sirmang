<?php

namespace App\Repository;

use App\Entity\Partenairecellule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Partenairecellule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Partenairecellule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Partenairecellule[]    findAll()
 * @method Partenairecellule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartenairecelluleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Partenairecellule::class);
    }

    // /**
    //  * @return Partenairecellule[] Returns an array of Partenairecellule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Partenairecellule
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
