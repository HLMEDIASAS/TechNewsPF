<?php
namespace Model\News;

class CategorieModel extends \W\Model\Model
{
    
    /**
     * R�cup�re les cat�gories depuis la BDD
     */
    public function getCategories() {
        $categories = $this->findAll();
        #print_r($categories);
        
        $data = [];
        
        foreach ($categories as $categorie) {
            $data[] = new Categorie($categorie['IDCATEGORIE'], $categorie['LIBELLECATEGORIE'], $categorie['ROUTECATEGORIE']);
        }
        
        #print_r($data);
        return $data;
       
    }
    
}

















