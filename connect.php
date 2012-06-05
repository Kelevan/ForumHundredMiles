<?php
	include_once("./includes.php");
	if(isset($_GET['action']))
	{
		switch($_GET['action'])
		{
			case "logout":
				// SCRIPT DE DECONNEXION
				entete("Deconnexion...");
				$_SESSION = array();
				echo "Vous etes deconnecte... Renvoi vers l'accueil.";
				pied();
				die('<meta http-equiv="refresh" content="2;URL=./index.php">');				
				break;
			case "login":
				entete("Connexion...");
				if (empty($_POST['mail'])or empty($_POST['pass']))
				{
					echo "Vous avez oublie de remplir un champ";
					die('<meta http-equiv="refresh" content="2;URL=./index.php">');
				}	
				$req_connexion=query("select * from utilisateur where mail='".$_POST['mail']."'; ");
				if(mysql_num_rows($req_connexion)==0)
				{
					echo "E_mail incorrect";
					die('<meta http-equiv="refresh" content="2;URL=./index.php">');
				}	
				$connexion=mysql_fetch_array($req_connexion);
			 	if(($_POST['pass'])!=$connexion['password'])
				{
					echo "Mot de passe incorrect";
					die('<meta http-equiv="refresh" content="2;URL=./index.php">');
				}	
				$_SESSION['pseudo']=$connexion['pseudo'];
				echo "Connexion reussie... Renvoi vers l'accueil.";
				pied();
				die('<meta http-equiv="refresh" content="2;URL=./index.php">');
				break;
		}
	}	
?>