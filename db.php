<?php
	// Infos de connexion � la base
	$sql_user="root";
	$sql_pass="";
	$sql_db = "hundred_miles";
	$sql_serv="localhost";
	$sql_link = NULL;

	function sql_connect() 
	{
		global $sql_link, $sql_user, $sql_pass, $sql_db, $sql_serv;
		if (!$sql_link) 
		{ // Si on est pas deja connecte
			$sql_link = @mysql_connect($sql_serv, $sql_user, $sql_pass) or die('Connexion au serveur mySQL impossible!<br>Essayez de <a href="javascript:location.reload()">recharger</a> la page.');
			mysql_select_db($sql_db, $sql_link) or die('Impossible de s�l�ctionner la base de donn�es.<br>Essayez de <a href="javascript:location.reload()">recharger</a> la page.');
		}
	}


	/* fermeture mysql */
	function sql_close() 
	{
		global $sql_link;
		if ($sql_link) 
		{ // Si on est deja connecte
			mysql_close($sql_link);
			$sql_link = NULL;
		}
	}
	sql_connect();
	
	function query($sql)
	{
		global $sql_link;
		if (!$sql_link) 
		{ // Si on est pas connecte
			sql_connect(); // on se connecte
		}
		$var = mysql_query($sql,$sql_link) or die('Erreur sur la requete: '.$sql.'<br>Essayez de <a href="javascript:location.reload()">recharger</a> la page.<br>Si la page est totalement blanche,cliquez <a href="./index.php">ici</a> ou faites pr&eacute;c&eacute;dent avec votre navigateur.<br><br>Erreur SQL:<br/>'.mysql_error().'</div>'); // on traite la requ�te
		return $var;
		sql_close();
	}
?>
