<?php

namespace Controller;

use \W\Controller\Controller;
use Model\News\CategorieModel;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par d�faut
	 */
	public function home()
	{
		$this->show('default/home');
	}
	
	public function accueil() {
	    $this->show('default/accueil');
	}

}










