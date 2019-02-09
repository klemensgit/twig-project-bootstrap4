<?php 

    function getNews(){
        global $twig;

        $subTplNews = $twig->render('templates/tpl_news.twig', array(
            'type' => 'News',
            'sub-title' => 'Latest news',

            'items' => array(
                array('title' => 'First news', 'abstract' => 'short abstract in first news', 'date' => '21.10.2018'),
                array('title' => 'Second news', 'abstract' => 'short abstract in second news', 'date' => '20.10.2018'),
                array('title' => 'Third news', 'abstract' => 'short abstract in third news', 'date' => '23.09.2018'),
                array('title' => 'Fourth news', 'abstract' => 'short abstract in 4 news', 'date' => '12.09.2018'),
                array('title' => 'Fifth news', 'abstract' => 'short abstract in 5 news', 'date' => '05.09.2018'),
                array('title' => 'Sixth news', 'abstract' => 'short abstract in 6 news', 'date' => '02.09.2018'),
            ),

            'table' => array(
                array('title' => 'First news', 'abstract' => 'short abstract in first news', 'date' => '21.10.2018'),
                array('title' => 'Second news', 'abstract' => 'short abstract in second news', 'date' => '20.10.2018'),
                array('title' => 'Third news', 'abstract' => 'short abstract in third news', 'date' => '23.09.2018')
            )

        ));

        return $subTplNews;
    }

    function getProducts(){
        global $twig;

        $subTplNews = $twig->render('templates/sub_tpl_block.twig', array(
            'type' => 'Products',
            'sub-title' => 'New products',

            'items' => array(
                array('title' => 'Ball', 'abstract' => 'small plastic ball', 'price' => '12.02'),
                array('title' => 'Clock', 'abstract' => 'premium what color clock', 'price' => '55.99'),
                array('title' => 'Car', 'abstract' => 'car for kids', 'price' => '15.55'),
                array('title' => 'Fliper', 'abstract' => 'table fliper', 'price' => '35.98'),
                array('title' => 'Cards', 'abstract' => 'pokemon cards', 'price' => '5.45')
            ),

            'table' => array(
                array('title' => 'Ball', 'abstract' => 'small plastic ball', 'price' => '12.02'),
                array('title' => 'Clock', 'abstract' => 'premium what color clock', 'price' => '55.99'),
                array('title' => 'Car', 'abstract' => 'car for kids', 'price' => '15.55')
            )

        ));

        return $subTplNews;
    }

?>