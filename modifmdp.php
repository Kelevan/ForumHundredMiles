<!DOCTYPE html>
<html lang="en">
    
<!--------------------------------HEAD------------------------------------->    
  <head>
    <meta charset="utf-8">
    <title>Hundred Miles</title>
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
                                    <li><a href="#tab2" data-toggle="tab">Organisation</a></li>
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
        <div class="form-actions">      
            <label class="control-label"><b>Mot&nbsp;de&nbsp;passe&nbsp;actuel&nbsp;:*</b></label>
            <div class="controls">
                <input type="text" class="input-xlarge" id="inputtactuel" value="" type="text">
            </div>
        </div>
      </div>
      
      
      
      
      <div class="container">  
        <div class="form-actions">
            <label class="control-label"><b>Nouveau&nbsp;mot&nbsp;passe&nbsp;:*</b></label>
            <div class="controls">
                <input type="text" class="input-xlarge" id="inputtnouveau1" value="" type="text">
            </div>
            <label class="control-label"><b>Confirmation&nbsp;du&nbsp;nouveau&nbsp;mot&nbsp;passe&nbsp;:*</b></label>
            <div class="controls">
                <input type="text" class="input-xlarge" id="inputtnouveau2" value="" type="text">
            </div>
            <div class="container">
                <a class="btn btn-primary" href="#">Confirmer</a>
                <a class="btn btn-inverse" href="./modifmdp.php">Réinitialiser</a>
            </div>
        </div>
      </div>
      
      
      
            
      
      
      
      
      

   <div class="navbar navbar-bottom">
      <footer class="footer-bottom">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p class="pull-left"><h3>By Kelevan & Kirby</h3></p>
      </footer>
   </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap.min.js"></script>
 

  </body>
</html>

