<body>
    
    <?php 
        global $twig;
        
        $tplContent = $twig->render('templates/tpl_content.twig', array(
            'name' => 'Content page',   
        ));
        echo $tplContent;

        echo getProducts(); 
    ?>  

    </body>
</html>