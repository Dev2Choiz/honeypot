<?php

namespace GGG\Bundle\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller{

	public function inscriptionAction(){
		return $this->render('GGGUserBundle:Default:inscription.html.twig');
	}
	
}

?>