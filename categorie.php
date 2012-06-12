<?php
    include_once("./includes.php");
    entete("Musique");
    verif_connexion();
?>    
    <div class="container">
        <ul class="breadcrumb">
        <li>
        <a href="./index.php">Home</a> <span class="divider">/</span>
        <?php
        $req_connexion=query("select * from categorie where idCat='".$_GET['id']."'");
        while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) 
        {
        echo "<a href='./categorie.php?id=".$row[0]."'>".$row[1]."</a>";
        }        
       ?>
        </li>
        </ul>
        <form class="well form-horizontal" method="post">        
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr class="row">
                        <th>Img forum</th>
                        <th><center>Forums</center></th>
                        <th>Nb Topics</th>
                        <th>Dernier message</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <?php
                        $req_connexion0=query("select * from forum where id_Cat='".$_GET['id']."'");
                        while ($row = mysql_fetch_array($req_connexion0, MYSQL_NUM)) 
                        {
                            echo " <tr class='row'> 
                            <td></td>
                                <td><a href='./forum.php?id=".$row[0]."'>".$row[1]."</a></td>
                                ";
                        
                        
                            $req_connexion1=query("select count(idTopic) from topic where id_Forum='".$row[0]."'");
                            while ($row1 = mysql_fetch_array($req_connexion1, MYSQL_NUM)) 
                            {
                            echo "
                                <td>".$row1[0]."</td>
                                <td></td>
                            </tr>
                                ";
                            }
                        }
                    ?>
                        

                </tbody>
            </table>
        </form>
        
<?php
    pied();
?>               
  
