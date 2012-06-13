<?php

// Démarrage de la session
session_start();

// Verification du script DB.PHP
include_once("./db.php");

// --------------------- FONCTION ENTETE -------------------
function entete($titre)
{
    echo'
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Hundred Miles :: '.$titre.'</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">

            <!-- Le styles -->
            <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
            </style>        
            <link href="./css/bootstrap.css" rel="stylesheet" media="screen">
            <link href="./css/bootstrap-responsive.css" rel="stylesheet">
          
        </head>
        <body>
            <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="./index.php">Hundred Miles</a>               
            ';
    menu();
    echo'</div></div>';
}   

// --------------------- FONCTION DU MENU POUR GERER LES DROITS -------------------
function verif_connexion()
{
       if (!isset($_SESSION['idUtil']))
       {
                       echo'Vous devez etre inscrit et connect&eacute; pour visionner cette page.';
                       $url="./index.php";
                       die('<meta http-equiv="refresh" content="1;URL='.$url.'">');
       }
}

  function menu()
{  
      
    if(isset($_SESSION['pseudo']))
        {
            if (isset($_SESSION['idTypeUtil']))
            {
                if ($_SESSION['idTypeUtil']==1)
                {
                    
                }
                elseif($_SESSION['idTypeUtil']==2)
                {
                    echo '                        
                        <ul class="nav pull-right">
                        <div class="btn-group">
                            <a class="btn btn-inverse">Panel Admin</a>
                            <a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./listeCategorie.php"><i class="icon-th-large"></i> Gestion des catégories</a></li>
                                <li><a href="./listeForum.php"><i class="icon-th-list"></i> Gestion des forums</a></li>
                            </ul>  
                        </ul> 
                        ';
                }
                elseif($_SESSION['idTypeUtil']==3)
                {
                    echo '
                        <ul class="nav pull-right">
                        <div class="btn-group">
                            <a class="btn btn-inverse">Panel Admin</a>
                            <a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./listeMembre.php"><i class="icon-user"></i> Gestion des utilisateurs</a></li>
                                <li><a href="./listeCategorie.php"><i class="icon-th-large"></i> Gestion des catégories</a></li>
                                <li><a href="./listeForum.php"><i class="icon-th-list"></i> Gestion des forums</a></li>
                            </ul>  
                        </ul>    
                        ';
                }
            }
            echo '
                <div class="nav-collapse">
                    <ul class="nav">             
                        <div class="tabbable">
                                <ul class="nav nav-pills">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catégories<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                        ';
            
                                                $req_connexion=query("select idCat,nomCat from categorie");
                                                while ($row = mysql_fetch_array($req_connexion, MYSQL_NUM)) 
                                                {
                                                echo "<li><a href=./categorie.php?id=".$row[0].">".$row[1]."</a></li>";
                                                }

            echo'
                                        </ul>
                                    </li>
                                </ul>
                        </div>
                    </ul>
                </div>
                ';
            
            echo "
                <div class='btn-group pull-right'>
                        <span> <a class='btn btn-inverse' href='./messagerie.php?id=".$_SESSION['idUtil']."'> <span class='add-on'><i class='icon-envelope icon-white'></i>&nbsp;</span>Messages&nbsp;</a><span>
                        <a class='btn dropdown-toggle' data-toggle='dropdown' href='#'>
                        <i class='icon-user'></i> ";
            echo $_SESSION['pseudo'];
            echo    '
                    <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="./profil.php">Profil</a></li>
                        <li class="divider"></li>
                        <li><a href="./connect.php?action=logout">Se déconnecter</a></li>
                    </ul>
                    </div>
                    </div>
                    ';

        }
    else
        {
            echo'
                    <ul class="nav pull-right">
                    <ul class="nav nav-pills">
                        <a data-toggle="modal" href="#myModal" class="btn btn-danger" class="btn-group"><i>Se connecter</i></a> 
                    </ul>   
                    </ul>
                        </div> 
                </div>
                </div>
                </div>
                <div id="myModal" class="modal hide fade">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h3>Connexion</h3>
                    </div>
                    <div class="modal-body">
                        <div class="tab-pane active" id="connexion">
                        <form class="well form-horizontal" method="post" action="./connect.php?action=login">
                                <div class="control-group">
                                    <label class="control-label" for="input01"><b>E-mail</b></label>
                                    <div class="controls">
                                        <input type="text" class="input-large" id="mail" name="mail">  
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="input01"><b>Mot de passe</b></label>
                                    <div class="controls">
                                        <input type="password" class="input-large" id="pass" name="pass">  
                                    </div>
                                </div>
                    </div>             
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                        <button data-dismiss="modal" class="btn btn-warning">Annuler</button>
                    </div>
                        </form>
                        </div>                   
                </div>';
        }
}              
    function pied()
    {
        echo'
        <div class="navbar navbar-bottom">
            <footer class="footer-bottom">
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p class="pull-left"><h3>By Kelevan & Kirby</h3></p>
            </footer>
        </div>
        <script src="./js/jquery.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        </div>
        </body>
        </html> ';
    }

?>

