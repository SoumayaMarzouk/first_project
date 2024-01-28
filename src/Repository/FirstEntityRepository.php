<?php

namespace App\Repository;

use App\Entity\FirstEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FirstEntity>
 *
 * @method FirstEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method FirstEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method FirstEntity[]    findAll()
 * @method FirstEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FirstEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FirstEntity::class);
    }

//    /**
//     * @return FirstEntity[] Returns an array of FirstEntity objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FirstEntity
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
