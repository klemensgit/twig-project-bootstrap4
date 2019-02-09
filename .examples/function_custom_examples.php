<?php 

    function getEntryTpl(){
        global $twig;

        $tplEntry = $twig->render('templates/tpl_entry.twig', array(
            'name' => 'Test1',

            'navigation' => array(
                array('name' => 'prvi', 'href' => '?page=home'),
                array('name' => 'drugi', 'href' => '?page=content'),
                array('name' => 'tretji')
            )
        ));

        return $tplEntry;
    }


    function getContentTpl(){
        global $twig;

        $tplContent = $twig->render('templates/tpl_content.twig', array(
            'name' => 'Test2',   
        ));

        $tplContent .= getNews();

        /*$tplContent .= $twig->render('templates/sub_tpl_news.twig', array(
            'title' => 'NEWS1', 
            'abstract' => 'short abstract text'  
        ));*/

        return $tplContent;
    }

    function getContentTpl1(){
        global $twig;

        $tplContent = $twig->render('templates/tpl_content.twig', array(
            'name' => 'Test3',   
        ));

        return $tplContent;
    }


    function getNews(){
        global $twig;

        $subTplNews = $twig->render('templates/sub_tpl_news.twig', array(

            'items' => array(
                array('title' => 'First news', 'abstract' => 'short abstract in first news', 'date' => '21.08.2018'),
                array('title' => 'Second news', 'abstract' => 'short abstract in second news', 'date' => '20.08.2018'),
                array('title' => 'Third news', 'abstract' => '?short abstract in third news', 'date' => '23.09.2018'),
            )
            
        ));

        return $subTplNews;
    }

    function getProducts(){
        global $twig;

        $subTplNews = $twig->render('templates/sub_tpl_news.twig', array(
            'title' => 'Product1', 
            'abstract' => 'short product description'  
        ));

        return $subTplNews;
    }




    /*
    function getEntryTpl(){
        global $twig;

        $tplContent = $twig->render('tpl_entry.php', array(
            'name' => 'Fabien',   
        ));

        return $tplContent;
    }*/

?>