<?php

namespace Chado\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Chado\MainBundle\Form\TagType;
use Chado\MainBundle\Form\ArticleType;
use Chado\MainBundle\Entity\ChadoTag;
use Chado\MainBundle\Entity\ChadoArticle;
use Chado\MainBundle\Entity\ChadoComments;

use Symfony\component\HttpFoundation\request;

use \DateTime;

class AdminController extends Controller{

	// ----------------------------------------------- Articles --------------------------------------------------------
	// Display list of posts in admin section
	public function indexAction(){

		$article_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:chadoarticle');
    	$articles = $article_repo->findBy(array(),array(
    		'date' => 'DESC'
    		));

    	$parameters= array(
            "articles_list"=>$articles,
        );

 		return $this->render('ChadoMainBundle:admin:index.html.twig', $parameters);
    }


    // Form to create post
    public function createAction(Request $request,$id=0){
    	$article = new ChadoArticle;
    	// Test to see if we are creating a new post or editing an old one (ID=0 is not given[begin at 0])
    	if ($id!=0) {
    		$article_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:chadoarticle');
    		$article = $article_repo->findOneBy(
			    array('id' => $id)
			);
    	}

        $articleform=$this->createForm(new ArticleType(),$article);
        $articleform->handleRequest($request);

        // Form validation
        if ($articleform->isValid()) {

			$article->setDate(new DateTime());
			$article->setOnline(1);

			// 1st flush to get an ID if this is a new post in order to create the slug
			$em = $this->getDoctrine()->getManager();
			$em->persist($article);
			$em->flush();

			// Createslug based on title and id
			$titre=$this->slugify($article->getTitle());
			$slugtitre=substr($titre, 0,5);
			$id = $article->getId();
			$article->setSlug($slugtitre.$id);

			// 2nd flush to set the slug
			$em->persist($article);
			$em->flush();


			$url=$this->generateUrl("chado_main_admin");
			return $this->redirect($url);
        }

        $parameters= array("article_form"=>$articleform->createView());
 		return $this->render('ChadoMainBundle:admin:create.html.twig',$parameters);
    }


    // ----------------------------------------------Change post's status or delete article
    public function statusAction($id,$status){
    	$article_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:chadoarticle');
		$article = $article_repo->findOneBy(
		    array('id' => $id)
		);
		// Change post status
		$article->setOnline($status);
		$em = $this->getDoctrine()->getManager();
		$em->persist($article);
      	$em->flush();

      	$url=$this->generateUrl("chado_main_admin");
	  	return $this->redirect($url);
    }


    public function deleteAction($id){
		$article_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:chadoarticle');
		$article = $article_repo->findOneBy(
		    array('id' => $id)
		);
		
		$em = $this->getDoctrine()->getManager();
		$em->remove($article);
      	$em->flush();

      	$url=$this->generateUrl("chado_main_admin");
	  	return $this->redirect($url);
    }


    // ------------------------------------------------ Tag Management ---------------------------------------------------------
    // Create tag
    public function createTagAction(Request $request){
		$tag = new ChadoTag;
        $tagform=$this->createForm(new TagType(),$tag);

        $tagform->handleRequest($request);

        if ($tagform->isValid()) {
        	  $em = $this->getDoctrine()->getManager();
		      $em->persist($tag);
		      $em->flush();

			  $url=$this->generateUrl("chado_main_admintaglist");
	    	  return $this->redirect($url);
        }

        $parameters= array("tag_form"=>$tagform->createView());
 		return $this->render('ChadoMainBundle:admin:createtag.html.twig',$parameters);
    }


    // GetTaglist
    public function tagListAction(){
		$tag_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:chadotag');
    	$tags = $tag_repo->findAll();

    	$parameters= array("tags_list"=>$tags);
 		return $this->render('ChadoMainBundle:admin:taglist.html.twig',$parameters);
    }


// --------------------------------------------------------Comments management
    // Get Comments list
    public function commentsListAction($id){
		$article_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:chadoarticle');
    	$article = $article_repo->findOneBy(
		    array('id' => $id)
		);

		$comments=$article->getComments();

    	$parameters= array("comments_list"=>$comments,"article_name"=>$article->getTitle(),"artid"=>$id);
 		return $this->render('ChadoMainBundle:admin:commentlist.html.twig',$parameters);
    }

    // Delete comments
    public function deletecomAction($id,$article_id){
		$comment_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:chadocomments');
		$comment = $comment_repo->findOneBy(
		    array('id' => $id)
		);
		
		$em = $this->getDoctrine()->getManager();
		$em->remove($comment);
      	$em->flush();

      	$url=$this->generateUrl("chado_main_admincomments",array("id"=>$article_id));
	  	return $this->redirect($url);
    }


    //  ------------------------------------------- Simple functions ------------------------------------------------------------------
    // Function to slug
    public function slugify($text){ 
	  // replace non letter or digits by -
	  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
	  // trim
	  $text = trim($text, '-');
	  // transliterate
	  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	  // lowercase
	  $text = strtolower($text);
	  // remove unwanted characters
	  $text = preg_replace('~[^-\w]+~', '', $text);

	  if (empty($text)){
	    return 'n-a';
	  }
	  return $text;
	}
}
