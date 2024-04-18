<?php

namespace App\Repository;

use App\Entity\Debitcellule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Debitcellule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Debitcellule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Debitcellule[]    findAll()
 * @method Debitcellule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DebitcelluleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Debitcellule::class);
    }
    public function brouyard($cellule)
	{
		$query = $this->createQueryBuilder('a')
					->Where('a.date = :genre')
					->setParameter('genre', date('Y-m-d'))
                    ->andWhere('a.cellule = :cellule')
					->setParameter('cellule', $cellule)
					->getQuery();
		return $query->getResult();
	}
	public function daybrouyard($date, $cellule)
	{
		$query = $this->createQueryBuilder('a')
					->Where('a.date = :genre')
					->setParameter('genre', $date)
                    ->andWhere('a.cellule = :cellule')
					->setParameter('cellule', $cellule)
					->getQuery();
		return $query->getResult();
	}

/*	public function delCredit($session, array $pel)
	{	
		$query = $this->createQueryBuilder('a');
				$query->remove(Credit::class,'a')
					->where($query->expr()->in('a.id', $pel))
		return $query->getQuery()->execute();
	}*/

	public function plage($date, $date1, $cellule)
	{
		$query = $this->createQueryBuilder('a')
					->Where('a.date BETWEEN :debut AND :fin')
					->setParameter('debut', $date)
					->setParameter('fin', $date1)
                    ->andWhere('a.cellule = :cellule')
					->setParameter('cellule', $cellule)
					->getQuery();
		return $query->getResult();
	}

	public function ouverture($cellule)
	{
		$query = $this->createQueryBuilder('a')
					->Where('a.date < :genre')
					->setParameter('genre', date('Y-m-d'))
                    ->andWhere('a.cellule = :cellule')
					->setParameter('cellule', $cellule)
					->getQuery();
		return $query->getResult();
	}

	public function ouvertureplage($datedebut, $cellule)
	{
		$query = $this->createQueryBuilder('a')
					->Where('a.date < :genre')
					->setParameter('genre', $datedebut)
                    ->andWhere('a.cellule = :cellule')
					->setParameter('cellule', $cellule)
					->getQuery();
		return $query->getResult();
	}
}
