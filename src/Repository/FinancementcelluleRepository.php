<?php

namespace App\Repository;

use App\Entity\Financementcellule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Financementcellule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Financementcellule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Financementcellule[]    findAll()
 * @method Financementcellule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinancementcelluleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Financementcellule::class);
    }

    // /**
    //  * @return Financementcellule[] Returns an array of Financementcellule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Financementcellule
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
