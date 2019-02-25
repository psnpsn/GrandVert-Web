<?php

namespace JardinBundle\Repository;

/**
 * JardinRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JardinRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByUser($user){
        $query = $this->createQueryBuilder('j')->where('m.user = :param')->setParameter('param',$user);
        return $query->getQuery()->getResult();
    }
}
