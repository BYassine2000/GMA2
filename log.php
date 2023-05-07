<!DOCTYPE html>
<html>
<head>
	<title>Site de candidatures</title>
</head>
<body>
	<center>
			<h1> Bienvenue au site de recrutement </h1>
			<br/>
			
			<?php
			echo "<br/><h2> Insertion d'une candidature</h2>"; 
			require_once ("vue_insert_prof.php");



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

	</center>
</body>
</html>