<?php

namespace PreservationBundle\Repository;

/**
 * PreservationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PreservationRepository extends \Doctrine\ORM\EntityRepository
{
    public function findPreservationParametre($dateDebut,$dateFin){

        $query=$this->getEntityManager()
            ->createQuery("SELECT v FROM PreservationBundle:Preservation v 
                                where v.dateDebut = :dateDebut and (v.dateFin BETWEEN :dateDebut AND :dateFin)")
            ->setParameter('dateDebut',$dateDebut)->setParameter('dateFin',$dateFin);

        return $query->getResult();
    }
}
