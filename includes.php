<?php

// Démarrage de la session
session_start();

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
                <div class="btn-group pull-right">
                        <span> <a class="btn btn-inverse" href="./messagerie.php"> <span class="add-on"><i class="icon-envelope icon-white"></i>&nbsp;</span>Messages&nbsp;</a><span>
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user"></i> Username
                        <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="./profil.php">Profil</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Se déconnecter</a></li>
                        </ul>
                </div>      
                <div class="nav-collapse">
                    <ul class="nav">             
                        <div class="tabbable">
                            <ul class="nav nav-pills">
                                <ul class="nav nav-pills">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catégories<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#tab1">Organisation</a></li>
                                            <li><a href="./categorie.php">Musiques</a></li>
                                            <li><a href="#tab2">Concerts</a></li>
                                            <li><a href="#tab2">Equipe</a></li>
                                            <li><a href="#tab2">Groupes</a></li>
                                            <li><a href="#tab2">Support</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav nav-pills">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Panel Admin<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="./listeMembre.php">Gestion des utilisateurs</a></li>
                                            <li><a href="./listeCategorie.php">Gestion des catégories</a></li>
                                            <li><a href="./listeForum.php">Gestion des forums</a></li>
                                        </ul>
                                    </li>
                                </ul>        
                                </ul class="nav">
                                    <ul class="nav nav-pills">
                                        <a data-toggle="modal" href="#myModal" class="btn btn-danger"><i>Se connecter</i></a> 
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
                    <div class="tab-pane active" id="tab1">
                    <form class="well form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="input01"><b>E-mail</b></label>
                                <div class="controls">
                                    <input type="text" class="input-medium" id="input01" value="aaa@exemple.com ">  
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input01"><b>mot de passe</b></label>
                                <div class="controls">
                                    <input type="text" class="input-medium" id="input01" value="********">  
                                </div>
                            </div> 
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Se connecter</button>
                                <button type="reset" class="btn btn-warning">Annuler</button>
                            </div>
                        </fieldset>
                    </form>
                    </div>    
                </div>
            </div>';
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

