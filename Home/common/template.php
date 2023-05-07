
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
    
</head>
<body>
<?php require "menu.php" ?>
<br><br>
    <div class="container">
        <marquee><h1 class="border border-dark bg-warning rounded-lg text-white p-2 my-2"><?=$titre ?></h1></marquee>
        <?=$content ?>
    </div>
          
<center>
            <h1> Bienvenue au site de recrutement </h1>
    
            
            <?php
            echo "<br/><h2> Gestion des profs</h2>"; 
            require  ("C:xampp\htdocs\GMA2\vue\vue_insert_prof.php");



            //la connexion à la base de données en utilisant PDO 
            try{
            $connexion = new PDO("mysql:host=localhost:3306;dbname=Iris", "root",""); 
            // EN PC : localhost, root et aucun mot de pass.
            }   
            catch(PDOException $exp)
            {
                echo "Erreur de connexion à la base de données";
            }

            if (isset($_POST['Valider']))
            {
                $requete = "insert into candidature values (null, :nom, 
                :prenom, :Adresse, :diplome); ";

                $donnees = array(":Nom"=>$_POST['nom'], 
                                 ":prenom"=>$_POST['prenom'],
                                 ":Adresse"=>$_POST['email'], 
                                 ":diplome"=>$_POST['diplome']);
                $insert = $connexion->prepare ($requete); 
                $insert->execute ($donnees); 

            }


            echo "<br/><h2> Liste des candidatures</h2>"; 
            //requete d'extraction des candidatures 
            $requete = "select* from professeurs "; 
            $select=$connexion->prepare($requete); 
            $select-> execute();

            $lesProfs = $select->fetchAll(); 

            require_once("vue/vue_select_all_profs.php");
            ?>
        <a href="https://ecoleiris.fr/ecole">Visiter le site</a>

 </center>
</body>
</html>