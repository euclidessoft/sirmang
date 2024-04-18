<?php

namespace App\Repository;

use App\Entity\Autreentreecellule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Autreentreecellule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Autreentreecellule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Autreentreecellule[]    findAll()
 * @method Autreentreecellule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutreentreecelluleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Autreentreecellule::class);
    }

    // /**
    //  * @return Autreentreecellule[] Returns an array of Autreentreecellule objects
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
    public function findOneBySomeField($value): ?Autreentreecellule
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
