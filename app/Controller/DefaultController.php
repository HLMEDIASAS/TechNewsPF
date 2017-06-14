<?php

namespace Controller;

use \W\Controller\Controller;
use Model\Db\DbFactory;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
	    # Connexion à la BDD
	    DbFactory::start();
	    
	    # Récupération des Articles en SPOTLIGHT
	    $spotlights = \ORM::for_table('view_articles')
	                       ->where('SPOTLIGHTARTICLE',1)
	                       ->find_result_set();
	    
	    # Transmission à la Vue
		$this->show('default/home', ['spotlights' => $spotlights]);
	}

}










