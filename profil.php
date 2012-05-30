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
              <li><a href="./profil.php">Profil</a></li>
              <li class="divider"></li>
              <li><a href="#">Se déconnecter</a></li>
            </ul>
          </div>
          <div class="nav-collapse">
            <ul class="nav">
              
                <div class="tabbable">
                <ul class="nav nav-pills">
                <li><a href="#">Home</a></li>
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
        <div class="tabbable">
            <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Information</a></li>
            <li><a href="#tab2" data-toggle="tab">Avatar</a></li>
            </ul>
            <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid rgb(221, 221, 221);">
    <!-----------------------------------ONGLET INFORMATION------------------------------------>
                <div class="tab-pane active" id="tab1">
                    <!----ENREGISTREMENT---->
                    <h2>Enregistrement</h2>
                    <div class="form-actions" > 
                        <div class="control-group">
                            <label class="control-label"><b>Nom&nbsp;d'utilisateur&nbsp;:*</b></label>
                            <div class="controls">
                                    <span class="input-xlarge uneditable-input">Tom</span>
                            </div>
                            <label class="control-label"><b>Adresse&nbsp;e-mail&nbsp;:*</b></label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="input01" value="adresse@mail.com" type="text">
                            </div>
                            <label class="control-label"><b>Changer&nbsp;de&nbsp;mot&nbsp;de&nbsp;passe&nbsp;:*</b></label>
                            <a class="btn btn-primary" href="./modifmdp.php">Modifier</a>
                        </div>
                    </div>

                    <!----PROFIL PERSO---->
                    <h2>Profil personalisé</h2>
                    <div class="form-actions">
                        <div class="control-group">
                            <label class="control-label" for="inlineChekboxes"><b>Sexe</b></label>
                            <div class="checkbox inline">
                                <label class="checkbox inline">
                                    <input id="checkbox inline" value="option1" type="checkbox"> Homme
                                </label>
                                <label class="checkbox inline">
                                    <input id="checkbox inline" value="option2" type="checkbox"> Femme
                                </label>

                                <div class="control-group">
                                    <label class="control-label"><b>Date&nbsp;de&nbsp;naissance&nbsp;:</b></label>
                                    <div class="control-group">
                                        <label class="control-label"></label>
                                        <div class="controls docs-input-sizes">
                                            <div>
                                                <p> Date: <input class="hasDatepicker" id="datepicker" type="text"></p>   
                                            </div> 
                                            <label class="control-label"><b>Localisation</b></label>
                                                <div class="controls">
                                                    <input type="text" class="input-xlarge" id="input01" value="Sarant" type="text">
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

    <!-----------------------------------ONGLET PRÉFÉRENCES------------------------------------>           
                <div class="tab-pane" id="tab2">
                    <div class="form-actions">
                        <p>Howdy, I'm in Section 2.</p>
                    </div>
                </div>

    <!-----------------------------------ONGLET AVATAR------------------------------------>
                <div class="tab-pane" id="tab4">
                    <div class="form-actions">
                        <div>
                            <h2>Image actuelle</h2>
                                <ul class="thumbnails">
                                    <li class="span3">
                                    <a href="#" class="thumbnail">
                                        <img src="http://placehold.it/260x180" alt="">
                                    </a>
                                    </li>   
                                </ul>
                        </div>
                        <div class="control-group">
                                    <label class="control-label" for="Upluader une image">Upluader un Fichier</label>
                                    <div class="controls">
                                        <input class="input-file" id="fileInputimage" type="file">
                                    </div> 
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a class="btn btn-inverse" href="./modifmdp.php">Réinitialiser</a>
    </div>
      
      
 

   <div class="navbar navbar-bottom">
      <footer class="footere-bottom">
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