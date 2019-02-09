<?php

// twig init -----------------------------------------------
require_once 'twig/vendor/autoload.php'; //twig functions

$loader = new Twig_Loader_Filesystem('./');
$twig = new Twig_Environment($loader);
//------------------------------------------------------------

//custom filter
$filter = new Twig_Filter('calculatePrice', function ($value, $off = '') {
    if($off != ''){
        $newPrice = $value - ($value * $off) / 100;
        return  '<b>€'.round($newPrice, 2).' </b> / <strike>€'.$value.'</strike>'.' <span class="off">('.$off.' off)</span>';
    }
    return  '<b>€'.$value.'</b>';
});
$twig->addFilter($filter);




require_once 'function_custom.php';
require_once 'tpl_head.php';


//load template
function loadTemplate($strId){

    if($strId == '/' ||  $strId == 'home'){
        include 'tpl_entry.php';
    }else if($strId == 'content'){
        include 'tpl_content.php'; 
    }else{
        echo "<h1>ERROR 404</h1>";
    }

}

?>