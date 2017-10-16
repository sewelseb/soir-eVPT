<?php
	include_once('../ObjClient.php');

	class Admin
	{
		private $_id;
		private $_pseudo;
		private $_motDePasse;
		private $_clef;
		private $_listeClients;
		
		public function getId()
			{
				return $this->_id;
			}
		public function getPseudo()
			{
				return $this->_pseudo;
			}
		public function getMotDePasse()
			{
				return $this->_motDePasse;
			}
		public function getClef()
			{
				return $this->_clef;
			}	
		public function getListeClients()
			{
				return $this->_listeClients;
			}

		public function setId($arg)
			{
				 $this->_id=$arg;
			}
		public function setPseudo($arg)
			{
				 $this->_pseudo=$arg;
			}
		public function setMotDePasse($arg)
			{
				 $this->_motDePasse=$arg;
			}
		public function setClef($arg)
			{
				 $this->_clef=$arg;
			}	
		public function setListeClients($arg)
			{
				$this->_listeClients=$arg;
			}
		function __construct()
			{
				
			}
		function hydrateConexion($userName, $password)
			{
				$this->setPseudo($userName);
				$this->setMotDePasse($password);
			}

		public function connection($bdd)
			{
				$retour=0;
				$pseudo=$this->getPseudo();
				$motDePasse=$this->getMotDePasse();
				$listeAdmin=$bdd->query('SELECT * FROM admin WHERE (pseudo=\''.$pseudo.'\')');
				while ($admin=$listeAdmin->fetch())
					{
						if ($admin['mot_de_passe']==$motDePasse)
						{
								
								$clef=time();
								
								$bdd->exec('UPDATE admin SET clef=\''.$clef. '\' WHERE id=\''.$admin['id']. '\'');
								$_SESSION['clef']=$clef;
								$_SESSION['pseudo'] = $pseudo;
								$retour=1;
							}
					}
				return $retour;
			}
		public function verificationConecte($bdd)
			{
				$retour=0;
				
				
				$listeUsers=$bdd->query('SELECT * FROM admin WHERE (pseudo=\''.$_SESSION['pseudo'].'\')');
				while ($user=$listeUsers->fetch())
					{
						echo $user['pseudo'];
						if ($user['clef']==$_SESSION['clef'])
							{
									
									
									
									$retour=1;
							}
					}
				return $retour;
			}
		public function hydrateListeObjClient($bdd)
			{
				$i=0;
				$reqListeClients=$bdd->query('SELECT * FROM reponse_clients ORDER BY nom');
				while ($clientBdd=$reqListeClients->fetch())
					{
						$client= new Client();
						$client->hydratePlusId($clientBdd['id'], $clientBdd['titre'], $clientBdd['nom'], $clientBdd['prenom'], $clientBdd['presence_soiree'], $clientBdd['message'],$clientBdd['mail']);
						$liste[$i]=$client;
						echo 'truc';
						
						$i++;
					}
				$this->setListeClients($liste);
			}
	}

?>