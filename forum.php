<!DOCTYPE html>
<html lang="en">
    
<!--------------------------------HEAD------------------------------------->    
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">
  </head>
  
<!--------------------------------BODY------------------------------------->  
  

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
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> Username
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Profil</a></li>
              <li class="divider"></li>
              <li><a href="#">Se déconnecter</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
              
                <div class="tabbable">
                    <ul class="nav nav-pills">
                    <li><a href="./index.php">Home</a></li>
                        <ul class="nav nav-pills">
                            <li class="dropdown">
                                <a class="dropdown-toggle"
                                data-toggle="dropdown"
                                href="#">
                                Catégories
                                <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#tab2">Organisation</a></li>
                                    <li><a href="./categorie.php">Musiques</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Concerts</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Equipe</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Groupes</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Support</a></li>
                                </ul>
                            </li>
                        </ul>
                                    <ul class="nav nav-pills">
                <li><a href="./panelAdmin.php">Panel Administrateur</a></li>
                    </ul>
                </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <ul class="breadcrumb">
        <li>
        <a href="./index.php">Home</a> <span class="divider">/</span>
        <a href="./categorie.php">Musique</a> <span class="divider">/</span>
        <a href="./Forum.php">Lyrics</a></span>
        </li>
        </ul>
    </div> 

      <div class="container">
      <table class="table table-bordered table-condensed">
        <thead>
            <tr class="row">
                
                <th><a href="#">> Sous-Forum</a></th>

            </tr>
            <tr class="row">
                <th colspan="7"><center>Forums </center></th>
                <th colspan="1">Sujets</th>
                <th colspan="1">Messages</th>
                <th colspan="3">Dernier Messages</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="./topic.php">Lyrics <br/></a>Lyrics terminée et opérationnelles.</td>
                <td colspan="1">11</td>
                <td colspan="1">24</td>
                <td colspan="3">Mer mar 14, 2012 3:05pm<br/>Tom</td>
            </tr>
            <tr class="row">              
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="#">Traduction<br/></a>Traduction des lyrics existantes.</td>
                <td colspan="1">7</td>
                <td colspan="1">9</td>
                <td colspan="3">Jeu dec 09, 2010 2:20am<br/>Valou</td>
            </tr>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="#">Idées<br/></a>Idées de lyrics qui trainent.</td>
                <td colspan="1">4</td>
                <td colspan="1">24</td>
                <td colspan="3">Jeu dec 09, 2010 8:50pm<br/>Ben</td>
            </tr>
        </tbody>
    </table>
    </div>
      
    <div class="container">
      <table class="table table-bordered table-condensed">
        <thead>
            <tr class="row">
                <th><a href="#">> Lyrics</a></th>

            </tr>
            <tr class="row">
                <th colspan="6"><center>Sujets </center></th>
                <th colspan="1">Auteur</th>
                <th colspan="1">Réponses</th>
                <th colspan="2">Vus</th>
                <th colspan="2">Dernier message</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="5">Ré-Écriture des lyrics <br/> [  Aller à la page <a>1</a>,<a>2</a>]</td>
                <td colspan="1">Valou</td>
                <td colspan="1">18</td>
                <td colspan="2">72</td>
                <td colspan="2">Mer nov 23,2011 9:38pm <br/> Dav</td>
            </tr>
        </tbody>
    </table>
    </div>  
    

    
      

    <div class="navbar navbar-fixed-bottom">
      <footer class="footer-fixed-bottom">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p class="pull-left"><h3>By Kelevan & Kirby</h3></p>
      </footer>
   </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
 

  </body>
</html>       
