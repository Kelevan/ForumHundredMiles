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
                                    <li><a href="#tab1" data-toggle="tab">Organisation</a></li>
                                    <li><a href="./categorie.php">Musiques</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Concerts</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Equipe</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Groupes</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Support</a></li>
                                </ul>
                            </li>
                        </ul>
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
        <a href="./categorie.php">Musique</a></span>
        </li>
        </ul>
    </div> 

      <div class="container">
      <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th><a href="#">> Musique</a></th>

            </tr>
            <tr calss="row">
                <th colspan="7"><center>Forums </center></th>
                <th colspan="1">Sujets</th>
                <th colspan="1">Messages</th>
                <th colspan="3">Dernier message</th>
            </tr>
        </thead>
        <tbody>
            <tr calss="row">
                <td colspan="1">logo_new</td>
                <td colspan="1">img_micro</td>
                <td colspan="5"><a href="./forum.php">Lyrics</a><br/>Avancées des lyrics, idées, bout de texte, lyrics complète...</td>
                <td colspan="1">23</td>
                <td colspan="1">21</td>
                <td colspan="3">Jeu Mai 24,2012 8:50pm <br/>Tom</td>
            </tr>
            <tr>
                <td colspan="1">logo_new</td>
                <td colspan="1">img_ampoule</td>
                <td colspan="5"><a href="#">Riffs & idées</a><br/> Tous nos riffs et idées pour les futurs tracks</td>
                <td colspan="1">11</td>
                <td colspan="1">81</td>
                <td colspan="3">Jeu Mai 24,2012 10:50pm <br/>Kev</td>
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

