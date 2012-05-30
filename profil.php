<?php
    include_once("./includes.php");
    entete("Administration");
?> 
  
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
                                <input type="text" class="input-xlarge" id="inputmail" value="adresse@mail.com" type="text">
                            </div>
                            <label class="control-label"><b>Changer&nbsp;de&nbsp;mot&nbsp;de&nbsp;passe&nbsp;:*</b></label>
                            <a class="btn btn-primary" href="./modifmdp.php">Modifier</a>
                        </div>
                    </div>
                </div>
    <!-----------------------------------ONGLET AVATAR------------------------------------>
                <div class="tab-pane" id="tab2">
                    <div class="form-actions">
                        <div>
                            <h2>Image actuelle</h2>
                            <ul class="thumbnails">
                                <li class="span3">
                                <a href="#" class="thumbnail">
                                    <img src="http://fc03.deviantart.net/fs71/f/2011/098/f/e/trollface_wallpaper_by_juliothechange-d3dhjlw.jpg" alt="">
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
        
    <?php
        pied();
    ?> 
    </div>
  </body>
</html>