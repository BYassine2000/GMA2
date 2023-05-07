<!--<?php
	/*require_once("modele/modele.class.php");
	class Controleur
	{
		private $unModele;

		public function __construct ($serveur,$bdd,$user,$mdp)
		{
			$this->unModele = new Modele($serveur,$bdd,$user,$mdp);
		}

		public function selectAll($chaine ="*") //$chaine ="*" prends "*" si il n'y a rien dans la chaine
		{
			return $this->unModele->selectAll($chaine);
		}

		public function setTable($table)
		{
			$this->unModele->setTable($table);
		}

		public function insert($tab)
		{
			$this->unModele->insert($tab);
		}

		public function delete($where)
		{
			$this->unModele->delete($where);
		}

		public function selectWhere($chaine = "*",$where)
		{
			return $this->unModele->selectWhere($chaine,$where);
		}

		public function update($tab,$where)
		{
			$this->unModele->update($tab,$where);
		}
	}
?>