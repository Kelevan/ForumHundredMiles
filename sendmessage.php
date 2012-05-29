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
    
    <!--------- Editeur de text -------->
    <script type="text/javascript" src="./js/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
    tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "bullist,numlist,|,blockquote,|,undo,redo,|,link,unlink,anchor,image,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "sub,sup,|,emotions,iespell,media,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",   
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver"


    });
    </script>
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
                </ul>
                </div>
                
          </div>
        </div>
      </div>
    </div>
    <div class="container">
        <ul class="breadcrumb">
        <li><a href="./index.php">Home</a> <span class="divider">/</span></li>
        <li><a href="./categorie.php">Musique</a><span class="divider">/</span></li>
        <li><a href="./forum.php">Lycris</a><span class="divider">/</span></li>
        <li><a href="./topic.php">Lyrics</a><span class="divider">/</span></li>
        <li><a href="./message.php">You&nbsp;See</a></span></li>
        </ul>
    </div>
      
      
      
      <!------------MESSAGE---------------->  
      <fieldset class="container">
          <div>
            <form method="post" action="somepage">
                <textarea name="content" style="width:50%"></textarea>
            </form>
              <div class="control-group">
                <label class="control-label" for="Upluader un Fichier">Uploader&nbsp;un&nbsp;Fichier</label>
                <div class="controls">
                    <input class="input-file" id="fileInput" type="file">
                </div> 
              </div>
            <div>     
                <div class="form-actions">
                    <div class="row">
                        <div class="span1"> <button type="submit" class="btn btn-success">Répondre</button></div>
                        <div class="span1"> <button class="btn btn-info">Aperçue</button></div>
                        <div class="span1"> <button class="btn btn-inverse">Annuler</button></div>                    
                    </div>
                </div>     
            </div>  
         </div>
     </fieldset>
      
      
      
<!--------------------------------FOOTER------------------------------------->  
   <div class="navbar navbar-fixed-bottom">
     <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="right" href="#">By Kelevan & Kirby</a>
        </div>
      </div>
   </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
 

  </body>
</html>       
