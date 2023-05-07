<?php ob_start(); ?>

<!-- mettre ici le code -->

<?php

    $titre = "Bienvenue à iris";
   
    $content = ob_get_clean();
    require "../common/template.php";
    

?>

