<?php

namespace Chado\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Chado\MainBundle\Form\CommentsType;
use Chado\MainBundle\Entity\ChadoArticle;
use Chado\MainBundle\Entity\ChadoArticleTag;
use Chado\MainBundle\Entity\ChadoComments;
use Chado\MainBundle\Entity\ChadoUser;

use Symfony\component\HttpFoundation\request;
use Symfony\Component\Security\Core\SecurityContext;

use \DateTime;

class DefaultController extends Controller{
    // ------------------------------------------- Display posts list
    public function indexAction($page=0,$filter=null){

        // Call specific function to search objects that validate the filter conditions
		$em = $this->getDoctrine()->getManager();
		$articles = $em->getRepository('ChadoMainBundle:ChadoArticle')
        ->findmyshit($filter);


        // Get the 5 articles depending on the page we are
    	if ($page*5+5>=count($articles)) {
    		$next=-1;
    	}else{
    		$next=$page+1;
    	}
		$articles=array_slice($articles,$page*5,5);

        // To display the tag's cloud
    	$tag_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:chadotag');
    	$tags = $tag_repo->findAll();

    	$parameters= array(
            "articles_list"=>$articles,
            "tags_list"=>$tags,
            "next"=>$next,
            "prev"=>$page-1,
            "filter"=>$filter,
        );
        return $this->render('ChadoMainBundle:Default:index.html.twig', $parameters);
    }


    // ---------------------------------- Single post display ---------------------------------------
    public function singleAction(Request $request,$id){
    	$article_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:chadoarticle');
    	$article = $article_repo->findOneBy(
		    array('id' => $id)
		);
        // If someone try to access a non created post => Home redirection
        if ($article==null) {
           $url=$this->generateUrl("chado_main_index");
            return $this->redirect($url);
        }

        // Get post's comments to display
		$comments_list=$article->getComments();

        // Form to create comment
		$comment = new ChadoComments;
		$commentform=$this->createForm(new CommentsType(),$comment);
        $commentform->handleRequest($request);

        // comment validation
        if ($commentform->isValid()) {
        	$comments_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:chadocomments');

            // Test to see if the comment has a parent or not
            if ($commentform->get("parentid")->getData()!=null) {
                // Get the value of the parentid field of the form
                $parent = $comments_repo->find($commentform->get("parentid")->getData());
            }else{
                $parent=null;
            }
	    	
            // Get user name
        	$usercomment= $this->get("security.context")->getToken()->getUser();
			$comment->setDate(new DateTime());
			$comment->setArticle($article);
			$comment->setUser($usercomment);
			$comment->setParent($parent);

			$em = $this->getDoctrine()->getManager();
			$em->persist($comment);
			$em->flush();

			$url=$this->generateUrl("chado_main_single", array(
    			"id"=>$id
    		));
    		return $this->redirect($url);
        }
        

    	$parameters= array(
            "article"=>$article,
            "comments_list"=>$comments_list,
            "comment_form"=>$commentform->createView()
        );
        return $this->render('ChadoMainBundle:Default:single.html.twig', $parameters);
    }
}
