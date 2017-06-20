<?php
namespace Controller;

use W\Controller\Controller;
use Model\Db\DbFactory;

class ArticleController extends Controller
{
    /**
     * Afficher et Ajouter un Article dans la Base de Données
     */
    public function add() {
        
        # Connexion à la BDD
        DbFactory::start();
        
        # Récupérer la Liste des Auteurs
        $auteurs = \ORM::for_table('auteur')->find_result_set();
        
        # Récupérer la Liste des Catégories
        $categories = \ORM::for_table('categorie')->find_result_set();
        
        # Affichage de la Vue
        $this->show('article/add', ['auteurs' => $auteurs, 'categories' => $categories]);
    }
}












