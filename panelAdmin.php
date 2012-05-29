<!DOCTYPE html>
<html lang="en">
    
<!--------------------------------HEAD------------------------------------->    
  <head>
    <meta charset="utf-8">
    <title>Hundred miles</title>
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
                            <li><a href="./panelAdmin.php">Panel Administrateur</a></li>
                        </ul>
                    </ul>
                </div>
            </ul>
          </div>
        </div>
      </div>
    </div>
    

      
        

    <div class="container">
      <div class="row">          
        <div class="span12">
          <div class="hero-unit">
            <h3>Panel Administration</h3><br/>
            <ul>
                <li><a class="btn btn-primary" href="./gestionMembre.php">Gestion des membres</a></li><br/>
                <li><a class="btn btn-primary" href="./gestionCategorie.php">Gestion des catégories</a></li><br/>
                <li><a class="btn btn-primary" href="./gestionForum.php">Gestion des forums</a></li><br/>
                <li><a class="btn btn-primary" href="./gestionDroit.php">Gestion des droits</a></li>
            </ul>
    </div>
      
<!--------------------------------FOOTER------------------------------------->
            
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