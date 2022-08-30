<?php include( THEME_DIR_PHP.'header.inc.php'); 

    if($WHERE_AM_I == "search"){
        include(THEME_DIR_PHP.'search.php');
    }
    else if ($page->custom('template')) {   
 
            // If a custom template is specified 
            if ($WHERE_AM_I=='page') {
                include(THEME_DIR_PHP.$page->custom('template').'.php');
            } else {
                include(THEME_DIR_PHP.'home.php');
            }   
         
    } else {    
           // If not
            if ($WHERE_AM_I=='page') {
                include(THEME_DIR_PHP.'page.php');
            } else {
                include(THEME_DIR_PHP.'home.php');
            }    
     
    }      


include( THEME_DIR_PHP.'footer.inc.php'); ?>

