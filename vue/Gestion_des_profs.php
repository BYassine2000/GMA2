<!DOCTYPE html>
<html>
<head>
	<title>Site de candidatures</title>
</head>
<body>
	<center>
		
			
			<?php
			echo "<br/><h2> Insertion d'une candidature</h2>"; 
			require_once("vue/vue_insert_candi.php");



			//la connexion à la base de données en utilisant PDO 
			try{
			$connexion = new PDO("mysql:host=localhost:3306;dbname=candidat", "root",""); 
			// EN PC : localhost, root et aucun mot de pass.
			} 	
			catch(PDOException $exp)
			{
				echo "Erreur de connexion à la base de données";
			}

			if (isset($_POST['Valider']))
			{
				$requete = "insert into candidature values (null, :description, 
				:dateCand, :salaire, :statut); ";

				$donnees = array(":description"=>$_POST['description'], 
								 ":dateCand"=>$_POST['dateCand'],
								 ":salaire"=>$_POST['salaire'], 
								 ":statut"=>$_POST['statut']);
				$insert = $connexion->prepare ($requete); 
				$insert->execute ($donnees); 

			}


			echo "<br/><h2> Liste des candidatures</h2>"; 
			//requete d'extraction des candidatures 
			$requete = "select* from candidature "; 
			$select=$connexion->prepare($requete); 
			$select-> execute();

			$lesResultats = $select->fetchAll(); 

			require_once("vue/vue_select_candi.php");
			?>

	</center>
</body>
</html>