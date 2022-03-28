<?php

namespace App\Model\Entity;

class Organization{

    /**
     * Id da organização
     * @var integer
     */
    public $id = 1;
    
    /**
     * Nome da organização
     * @var string
     */
    public $name = 'RCP Solutions';
    
    /**
     * Site da organização
     * @var string
     */
    public $site = 'https://youtube.com';

    /**
     * Descrição da organização
     * @var string 
     */
    public $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ex diam, hendrerit nec ullamcorper quis, volutpat id elit. Nulla facilisi. Cras porta rutrum metus. Morbi venenatis justo non malesuada scelerisque. Suspendisse sed ipsum a augue lacinia pellentesque sed ac lorem. Pellentesque hendrerit eget nulla ut laoreet. Fusce tristique varius ligula eu blandit. Cras pharetra augue gravida dolor blandit bibendum. ';
}