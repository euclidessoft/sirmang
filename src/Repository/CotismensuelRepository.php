<?php

namespace App\Repository;

use App\Entity\Cotismensuel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cotismensuel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cotismensuel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cotismensuel[]    findAll()
 * @method Cotismensuel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CotismensuelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cotismensuel::class);
    }

    // /**
    //  * @return Cotismensuel[] Returns an array of Cotismensuel objects
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
    public function findOneBySomeField($value): ?Cotismensuel
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
