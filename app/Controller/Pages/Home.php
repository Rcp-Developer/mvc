<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{

    /**
     * Método responsável por retornar o conteúdo (view) da Home
     * @return string
     */
    public static function getHome(){

        $objOrganization = new Organization;

        $content = View::render('pages/home', [
            'name' => $objOrganization -> name,
            'description' => $objOrganization -> description,
            'site' => $objOrganization -> site
        ]);
        
        //Retorna a view da página        
        return parent::getPage('rodrigo', $content);
    }
}