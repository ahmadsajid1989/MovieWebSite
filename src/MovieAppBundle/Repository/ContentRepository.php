<?php

namespace MovieAppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ContentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContentRepository extends EntityRepository
{

    public function findByCategory($slug){


        $qb = $this->createQueryBuilder('a');
        $qb->add('select', 'a');
        $qb->leftJoin('a.category', 'c');
        $qb->where('c.name LIKE :category'); /* i have guessed a.name */
        $qb->setParameter('category', $slug);
        $qb->getQuery()->getResult();

        return $qb;
    }
}