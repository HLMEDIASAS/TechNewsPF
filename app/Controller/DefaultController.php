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
	    
	    # Récupérations des Articles de la Page d'Accueil
	    $articles = \ORM::for_table('view_articles')->find_result_set();
	    
	    # Transmission à la Vue
		$this->show('default/home', ['spotlights' => $spotlights, 'articles' => $articles]);
	}
	
	/**
	 * Permet d'afficher les articles d'une catégorie
	 * @param String $categorie
	 */
	public function categorie($categorie) {
	    
	    # Connexion à la BDD
	    DbFactory::start();
	    
	    # Récupérations des Articles de la Catégorie
	    $articles = \ORM::for_table('view_articles')
	                   ->where('LIBELLECATEGORIE', ucfirst($categorie))
	                   ->find_result_set();
	    
	    # Transmission à la Vue
	    $this->show('default/categorie', ['articles' => $articles, 'categorie' => $categorie]);
	    
	}
	
	/**
	 * Permet d'afficher un Article
	 * @param String $categorie
	 * @param Entier $id
	 * @param String $slug
	 */
	public function article($categorie, $id, $slug) {
	    # Connexion à la BDD
	    DbFactory::start();
	    
	    # Récupération de l'Article
	    $article = \ORM::for_table('view_articles')->find_one($id);
	    
	    # Récupération des Articles de la Catégorie (suggestions)
	    $suggestions = \ORM::for_table('view_articles')
	                       # Je récupère uniquement les articles de la même catégorie que mon article
	                       ->where('IDCATEGORIE', $article->IDCATEGORIE)
	                       # Sauf mon article en cours
	                       ->where_not_equal('IDARTICLE', $id)
	                       # 3 articles maximum
	                       ->limit(3)
	                       # Par ordre décroissant
	                       ->order_by_desc('IDARTICLE')
	                       # Je récupère les résultats
	                       ->find_result_set();
	    
	    # Transmission à la Vue
	    $this->show('default/article', ['article' => $article, 'suggestions' => $suggestions, 'categorie' => $categorie]);
	}

}



















