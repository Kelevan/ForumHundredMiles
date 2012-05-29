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
                    </ul>
                </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="./index.php">Home</a> <span class="divider">/</span></li>
            <li><a href="./categorie.php">Musique</a> <span class="divider">/</span></li>
            <li><a href="./forum.php">Lyrics</a> <span class="divider">/</span></li>
            <li><a href="./topic.php">Lyrics</a> </li>
        </ul>
    </div> 

      
                             <!-- TABLEAU -->
    <div class="container">   
      <table class="table table-bordered table-condensed">
        <thead>
             <tr>
                <div class="btn">Nouveau
                </div>
            </tr>
            <tr>
                Page <a href="#">1</a> sur <a href="#">2</a> [<a href="#">11</a>sujets]
            </tr>
            <tr class="row">
                <th><a href="./categorie.php">> Lyrics</a></th>
            </tr>
            <tr class="row">
                <th colspan="7"><center>Topics </center></th>
                <th colspan="1">Réponses</th>
                <th colspan="1">Vues</th>
                <th colspan="3">Dernier Messages</th>
            </tr>
        </thead>
        <tbody>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="./message.php">You See</a></td>
                <td colspan="1">0</td>
                <td colspan="1">30</td>
                <td colspan="3">Tom</td>
            </tr>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="./message.php">To My dad</a></td>
                <td colspan="1">0</td>
                <td colspan="1">19</td>
                <td colspan="3">Valou</td>
            </tr>
            <tr class="row">
                <td colspan="1">logo_new</td>
                <td colspan="6"><a href="./message.php">Life on Demand </a></td>
                <td colspan="1">5</td>
                <td colspan="1">18</td>
                <td colspan="3">Valou</td>
            </tr>
            <tr class="row">
                <td colspan="12"> <center><a href="#">Marquer tout comme lus</a></center></td>
            </tr>
            <tr class="row">
                <td colspan="12"> <div class="btn">Nouveau</div> Page <a href="#">1</a> sur <a href="#">2</a> [<a href="#">11</a>sujets]</td>
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