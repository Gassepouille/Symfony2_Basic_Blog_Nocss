<?php

namespace Chado\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Chado\MainBundle\Entity\ChadoUser;

use Chado\MainBundle\Form\RegisterType;
use Chado\MainBundle\Form\ForgotType;
use Chado\MainBundle\Form\ResetType;

use Symfony\component\HttpFoundation\request;
use Symfony\Component\Security\Core\SecurityContext;

use \DateTime;

class UserfuncController extends Controller{
    // ------------------------------------------- Login -------------------------------------------------------------------
	public function loginAction(Request $request){

		$session = $request->getSession();
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        

		$parameters= array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        );
    	return $this->render('ChadoMainBundle:Default:login.html.twig',$parameters);
    }

    // ------------------------------------------- Register -------------------------------------------------------------------
    public function registerAction(Request $request){
    	$user = new ChadoUser;
        $subscribeform=$this->createForm(new RegisterType(),$user);

        $subscribeform->handleRequest($request);

        // Form validation
        if ($subscribeform->isValid()) {
            // Generate random string for salt
        	  $user->setSalt($this->generateString(50));

            // Encode password in sha512 (see config file in root repository)
        	  $factory=$this->get("security.encoder_factory");
        	  $encoder=$factory->getEncoder($user);
        	  $password=$encoder->encodePassword(
        	  	$user->getPassword(), $user->getSalt()
        	  );
              // set encoded password
        	  $user->setPassword($password);

        	  $user->setToken($this->generateString(15));
        	  $user->setRoles(array("ROLE_USER"));
        	  $user->setDate(new DateTime());

        	  $em = $this->getDoctrine()->getManager();
		      $em->persist($user);
		      $em->flush();

			  $url=$this->generateUrl("chado_main_index");
	    	  return $this->redirect($url);

        }


        $parameters= array(
            "reg_form"=>$subscribeform->createView()
        );
    	return $this->render('ChadoMainBundle:Default:register.html.twig',$parameters);
    }

    // -------------------------------------- Forgot Password ------------------------------------------------
    public function forgotAction(Request $request){
        $forgotuser = new ChadoUser;
        $forgotform=$this->createForm(new ForgotType(),$forgotuser);

        $forgotform->handleRequest($request);

        // Form validation to send mail
        if ($forgotform->isValid()) {
                // Get the mail given in the form
                $users_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:ChadoUser');
                $present = $users_repo->findBy(
                    array('mail' => $forgotuser->getMail())
                ); 

                // test if the mail is present in the DB
                if (!empty($present)) {
                    // Creation of the mail with the user token
                    $contentmail=" You forgot your password, check this link to reset it : ";
                    $contentmail.=$this->generateUrl("chado_main_resetpass", array(
                        "token"=>$present[0]->getToken()
                    ),true);
                    $forgotmessage = \Swift_Message::newInstance()
                    ->setSubject('Forgot password')
                    ->setFrom("admin@chado.com")
                    ->setTo($forgotuser->getMail())
                    ->setBody($contentmail);
                    $this->get('mailer')->send($forgotmessage);
                }else{
                    echo "<b>Do you see what you get Carla ? <br> Do you see what you get when you mess with the warrior !</b>";
                    die();
                }

                $url=$this->generateUrl("chado_main_index");
                return $this->redirect($url);
        }

        return $this->render(
            'ChadoMainBundle:Default:forgot.html.twig',
            array("forgotform"=>$forgotform->createView())
        );
    }


    // ------------------------------------------------------- Reset Password 

    public function resetpassAction(Request $request,$token){
        $resetuser = new ChadoUser;
        $resetform=$this->createForm(new ResetType(),$resetuser);

        $resetform->handleRequest($request);

        // Form validation to init a new password
        if ($resetform->isValid()) {
                $users_repo = $this->getDoctrine()->getRepository('ChadoMainBundle:ChadoUser');
                // Find user with appropriate token
                $present = $users_repo->findBy(
                    array('token' => $token)
                );

                // Encode new password
                $factory=$this->get("security.encoder_factory");
                $encoder=$factory->getEncoder($present[0]);
                $password=$encoder->encodePassword(
                    $resetuser->getPassword(), $present[0]->getSalt()
                );
                $present[0]->setPassword($password);

                $em = $this->getDoctrine()->getManager();
                $em->persist($present[0]);
                $em->flush();
                
                $url=$this->generateUrl("chado_main_index");
                return $this->redirect($url);
        }

        return $this->render(
            'ChadoMainBundle:Default:resetpass.html.twig',
            array("resetform"=>$resetform->createView())
        );
    }


    // ------------------------------------------------ Simple function
    private function generateString($length){
    	return utf8_encode(base64_encode(
    			$this->get("security.secure_random")->nextBytes($length)
    		));
    }

}
