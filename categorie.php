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
        $req_connexion=query("select idCat, from categorie where idCat='".$_POST['nomCat']."'");
        while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) 
        {
        echo "<a href=./categorie.php?id=".$row[0].">".$row[1]."</a>";
        }        
       ?>
        </li>
        </ul>
    </div> 
    <div class="container">
        <form class="well form-horizontal" method="post">        
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th><a href="#">> Musique</a></th>

            </tr>
            <tr calss="row">
                <th>Lu/non lu</th>
                <th>Img forum</th>
                <th><center>Forums </center></th>
                <th>Messages</th>
                <th>Vues</th>
                <th>Dernier message</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $req_connexion=query("select * from forum");
        while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) {
        echo "<tr class='row'>
        <td></td>    
        <td>".$row[1]."</td>
        <td></td>
        <td></td>
        <td></td>    
        <td></td>    
        </tr>";
        }

        ?>

        </tbody>
    </table>
<?php
    pied();
?>               
  
