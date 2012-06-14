<?php
    include_once("./db.php");

        if ($_POST["pseudo"]==""){
            echo'bonjour';
            header("location: ./addMembre.php");
         
        }else{
            $req_connexion=query("select * from utilisateur where mail='".$_POST['mail']."'; ");
            if(mysql_num_rows($req_connexion)==0)
            {
                    if($_POST["pass"]==$_POST["pass2"]){
                        query("insert into utilisateur(pseudo,password,mail,id_TypeUtil) values('".$_POST['pseudo']."','".md5($_POST['pass'])."','".$_POST['mail']."',".$_POST['typeutil'].")");
                        header("location: ./listeMembre.php");
                    }else{
                            echo"Pass KO OF THE DEAD !!!! IN THE NIGHT è_é";
                        }

            }else{
                echo "E_mail KO";
            }
        }
?>