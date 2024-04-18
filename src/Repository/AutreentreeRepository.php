<?php

namespace App\Repository;

use App\Entity\Autreentree;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Autreentree|null find($id, $lockMode = null, $lockVersion = null)
 * @method Autreentree|null findOneBy(array $criteria, array $orderBy = null)
 * @method Autreentree[]    findAll()
 * @method Autreentree[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutreentreeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Autreentree::class);
    }

    // /**
    //  * @return Autreentree[] Returns an array of Autreentree objects
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
    public function findOneBySomeField($value): ?Autreentree
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
