<?php

namespace App\Repository;

use App\Entity\Employee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;

/**
 * @extends ServiceEntityRepository<Employee>
 *
 * @method Employee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Employee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Employee[]    findAll()
 * @method Employee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmployeeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employee::class);
    }

    public function add(Employee $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Employee $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllPaginated($filter='',$limit, int $page, array $sorting = array())
    {
        $fields = array_keys($this->getClassMetadata()->fieldMappings);
        $queryBuilder =  $this->createQueryBuilder('employee');
        if ($filter) {
            $queryBuilder->andWhere('employee.lastname LIKE :filter OR employee.firstname LIKE :filter')
                ->setParameter('filter', '%' . $filter . '%');
        }

        foreach ($fields as $field) {
            if (isset($sorting[$field])) {
                $direction = ($sorting[$field] === 'asc') ? 'asc' : 'desc';
                $queryBuilder->addOrderBy('employee.'.$field, $direction);
            }
            else
                $queryBuilder->addOrderBy('employee.id' ,'asc') ;


        }

        $pagerAdapter = new QueryAdapter($queryBuilder);
        $pager = new Pagerfanta($pagerAdapter);
        $pager->setMaxPerPage($limit);
        $pager->setCurrentPage($page);
        return $pager;
    }



//    /**
//     * @return Employee[] Returns an array of Employee objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Employee
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
