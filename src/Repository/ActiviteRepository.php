<?php

namespace App\Repository;

use App\Entity\Activite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Poste|null find($id, $lockMode = null, $lockVersion = null)
 * @method Poste|null findOneBy(array $criteria, array $orderBy = null)
 * @method Poste[]    findAll()
 * @method Poste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activite::class);
    }

    // /**
    //  * @return Activite[] Returns an array of Activite objects
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
    public function findOneBySomeField($value): ?Activite
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function poste()
	{
		// On passe par le QueryBuilder vide de l'EntityManager pour l'exemple
		$query = $this ->createQueryBuilder('a') 
					->Where('a.current = :current')
					->setParameter('current', true)
                    ->orderBy('a.nom', 'ASC')					;
					return $query;
	}
}
