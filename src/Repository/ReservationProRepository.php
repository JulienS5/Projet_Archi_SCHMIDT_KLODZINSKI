<?php

namespace App\Repository;

use App\Entity\ReservationPro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationPro|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationPro|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationPro[]    findAll()
 * @method ReservationPro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationProRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationPro::class);
    }

    // /**
    //  * @return ReservationPro[] Returns an array of ReservationPro objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReservationPro
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
