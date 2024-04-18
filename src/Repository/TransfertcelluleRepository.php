<?php

namespace App\Repository;

use App\Entity\Transfertcellule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Transfertcellule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transfertcellule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transfertcellule[]    findAll()
 * @method Transfertcellule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransfertcelluleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transfertcellule::class);
    }

    // /**
    //  * @return Transfertcellule[] Returns an array of Transfertcellule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Transfertcellule
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
