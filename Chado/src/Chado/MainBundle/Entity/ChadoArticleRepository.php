<?php 
namespace Chado\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ChadoArticleRepository extends EntityRepository{
    public function findmyshit($tag){
    	if ($tag!=null) {
    		$query = $this->getEntityManager()
	        ->createQuery('
	            SELECT a, t,c FROM ChadoMainBundle:ChadoArticle a
	            LEFT JOIN a.tags t
	            LEFT JOIN a.comments c
	            WHERE t.tagname = :tagname
	            ORDER BY a.date DESC'
	        )->setParameter('tagname', $tag);

	        return $query->getResult();
    	}else{
    		$query = $this->getEntityManager()
	        ->createQuery('
	            SELECT a, t,c FROM ChadoMainBundle:ChadoArticle a
	            LEFT JOIN a.tags t
	            LEFT JOIN a.comments c
	            ORDER BY a.date DESC'
	        );

	        return $query->getResult();
    	}
        
    }
}





 ?>