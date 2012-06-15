<?php
    include_once("./includes.php");
    entete("Message privé");
    verif_connexion();
?>       
<div class="container">    
    <ul class="breadcrumb">
        <li>
            <a href="./index.php">Home</a> <span class="divider">/</span>
            <?php
                $req_connexion=query("select idCat, nomCat from categorie c,forum f where c.idCat = f.id_Cat and f.idForum='".$_GET['id']."'");
                while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) 
                {
                    echo "<a href=./categorie.php?id=".$row[0].">".$row[1]."</a><span class='divider'> /</span>"; 

                    $req_connexion1=query("select * from forum where idforum='".$_GET['id']."'");
                    while ($row = mysql_fetch_array($req_connexion1, MYSQL_NUM)) 
                    {
                        echo "<a href=./forum.php?id=".$row[0].">".$row[1]."</a><span class='divider'>/</span>";    

                        $req_connexion2=query("SELECT * FROM topic WHERE idTopic='".$_GET['id']."'");
                        while($row=mysql_fetch_array($req_connexion2, MYSQL_NUM))
                        {
                            echo"<a href=./topic.php?id=".$row[0].">".$row[1]."</a>";
                        }
                    }
                } 
            ?>
        </li>        
    </ul>
    
    <div class="row">
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">Dernier&nbsp;fichier&nbsp;upload</li>
                    <li><a href="./audio/SleepAway.mp3">2 see</a><span><h6>06/06/12</h6></span></li>
                    <li class="nav-header">Uploader&nbsp;un&nbsp;Fichier</li>
                    <li>
                        <div class="btn-group">
                            <a href="./upload.php" class="btn btn-info">Upload</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="span9">   
            <form class="well">
                <?php
                    $topic_connexion=query("SELECT nomTopic FROM topic WHERE idTopic='".$_GET['id']."'");
                    $topic_find=mysql_fetch_array($topic_connexion);
                    $topic=$topic_find[0];
                    echo"<legend>".$topic."</legend>";
                ?>
                <table class="table table-bordered table-condensed ">
                    <?php
                    echo"<thead>
                        <tr>";
                        $message_connexion=query("SELECT * FROM message WHERE id_Topic='".$_GET['id']."'");
                        while($message=mysql_fetch_array($message_connexion, MYSQL_NUM)){
                            echo"<th><h6>".$message[2]."</h6></th>
                                <th><a class='btn btn-small pull-right' href='./editmessage.php'><i class='icon-edit'></i></a></th>
                        </tr>
                    </thead>
                    <tbody class='row'>
                        <tr>";
                            $util_connexion=query("SELECT pseudo FROM utilisateur WHERE idUtil='".$message['4']."'");
                            $util_find=mysql_fetch_array($util_connexion);
                            $util=$util_find[0];
                            echo"<td class='span2'>".$util."<br/> image </td>
                            <td class='span10'>".$message[1]."</td>
                        </tr>";
                                    }
                            ?>
                    </tbody>
                </table>>  
            </form>

            <div class="pagination">
                <ul>            
                    <li><a href="#"><i class="icon-chevron-left"></i></a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li><a href="#"><i class="icon-chevron-right"></i></a></li>            
                </ul>  
            </div>

            <div class="btn-group form-actions">
                <a href="./sendmessage.php" class="btn btn-success">Répondre&nbsp;<i class="icon-pencil icon-white"></i></a>
            </div>
        </div>    
  </div>
<?php
    pied();
?>      
