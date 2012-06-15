<?php
    include_once("./db.php");

    
    
            //Topic
    
        if ($_POST["titre"]==""){
            header("location: ./addTopic.php?id=".$_POST['idForum']."");
         
        }else
            {
                $req_connexion=query("SELECT * FROM topic WHERE idTopic='".$_POST['idTopic']."'; ");
                if(mysql_num_rows($req_connexion)==0)
                {
                    query("INSERT INTO topic(nomTopic,dateTopic,id_Forum,id_Util)values('".$_POST['titre']."', '".$_SERVER['REQUEST_TIME']."','".$_POST['idforum']."','".$_POST['session']."')");
                    
                    
                    //MESSAGE
                    $topic_connexion=query("SELECT MAX( idTopic ) AS idTopic FROM topic");
                    $topic_find=mysql_fetch_array($topic_connexion);
                    $topic=$topic_find[0];
                    
                    query("INSERT INTO message(contenuMsg,dateMsg,id_Topic,id_Util)VALUES('".$_POST['contenu']."', '".$_SERVER['REQUEST_TIME']."','".$topic."','".$_POST['session']."')");
                    
                    $topic_connexion2=query("SELECT MAX( idTopic ) AS idTopic FROM topic");
                    $topic_find2=mysql_fetch_array($topic_connexion2);
                    $topic2=$topic_find2[0];
                    header("location: ./topic.php?id=".$topic2."");
                }
                else
                {
                    echo"".$_POST['titre']."";echo"".$_POST['idforum']."";echo"".$_POST['session']."";
                }
        }
        
        
        
        
        
        
?>