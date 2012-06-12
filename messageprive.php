<?php
    include_once("./includes.php");
    entete("Message Privé");
    verif_connexion();
?>

    <div class="container">
        <ul class="pager">
            <li class="previous">
                <?php
                    echo"<a href='./messagerie.php?id=".$_SESSION['idUtil']."'><i class='icon-envelope'></i> Messagerie</a>";
                ?>
            </li>
        </ul>
        <form class="well" method="post" action="./repondreMessagePrive.php">
            <fieldset>
            <table class="table table-bordered table-condensed">
                <tbody>
                    
                    <?php
                        $titre_connexion=query("SELECT titreMsgPrive FROM messageprive WHERE idMsgPrive=".$_GET['id']."");
                        $titre_result=mysql_fetch_array($titre_connexion);
                        $titre=$titre_result[0];
                        echo"
                                <tr class='row'>
                                    <td name='titre' id='titre'><h4>".$titre."</h3></td>
                                </tr>
                            ";
                        $search_auteur=query("SELECT auteurId FROM messageprive WHERE idMsgPrive='".$_GET['id']."'");
                        $find_auteur=  mysql_fetch_array($search_auteur);
                        $auteur1=$find_auteur[0];
                        
                        $req2_connexion=query("SELECT pseudo FROM messageprive,utilisateur WHERE messageprive.auteurId=utilisateur.idUtil AND idUtil='".$auteur1."'");
                        $auteur_result=mysql_fetch_array($req2_connexion);
                        $auteur=$auteur_result[0];
                        echo"
                                <tr class='row'>
                                <td class='span2'>".$auteur."</td>
                            ";
                        
                        $mp_connexion=query("SELECT * FROM messageprive WHERE idMsgPrive='".$_GET['id']."'");
                        $mp=mysql_fetch_array($mp_connexion, MYSQL_NUM); 
                        echo"
                                <td class='span10'>".$mp['2']."</td>
                            </tr>
                            ";
                    ?>
                    
                </tbody>
            </table>
            <textarea id="repondre" name="repondre" style="width:50%"></textarea>   
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Répondre</button>
            </div>
            </fieldset>
        </form>

        
        
<?php
    pied();
?>              
