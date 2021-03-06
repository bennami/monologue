<?php

namespace App\Repository;

use App\Entity\AskName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AskName|null find($id, $lockMode = null, $lockVersion = null)
 * @method AskName|null findOneBy(array $criteria, array $orderBy = null)
 * @method AskName[]    findAll()
 * @method AskName[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AskNameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AskName::class);
    }

    // /**
    //  * @return AskName[] Returns an array of AskName objects
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
    public function findOneBySomeField($value): ?AskName
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
