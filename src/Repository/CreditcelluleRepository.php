<?php

namespace App\Repository;

use App\Entity\Creditcellule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Creditcellule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Creditcellule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Creditcellule[]    findAll()
 * @method Creditcellule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CreditcelluleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Creditcellule::class);
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
