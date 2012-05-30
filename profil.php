<?php
    include_once("./includes.php");
    entete("Administration");
?> 
  
    <div class="container">
        <div class="tabbable"> 
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
                <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <form class="well form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="input01"><b>Pseudo</b></label>
                                <div class="controls">
                                    <input type="text" class="input-medium" id="input01" value="Tom">  
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="input02"><b>E-mail</b></label>
                                <div class="controls">
                                    <input type="email" class="input-medium" id="input01" value="Tom@Hundred.Miles">  
                                </div>
                            </div> 
                            <div class="control-group">
                                <label class="control-label"><b>Mot&nbsp;de&nbsp;passe&nbsp;actuel&nbsp;:*</b></label>   
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="inputtactuel" value="" type="text">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><b>Nouveau&nbsp;mot&nbsp;passe&nbsp;:*</b></label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="inputtnouveau1" value="" type="text">
                                </div>                                                        
                                <label class="control-label"><b>Confirmation:*</b></label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="inputtnouveau2" value="" type="text">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button class="btn">Cancel</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="tab-pane" id="tab2">
                    <p>Howdy, I'm in Section 2.</p>
                </div>
            </div>
        </div>
        <!--<div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Information</a></li>
                <li><a href="#tab2" data-toggle="tab">Avatar</a></li>
            </ul>
            <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid rgb(221, 221, 221);">
                
                 INFORMATION 
                <div class="tab-pane active" id="tab1">
                    
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="input01"><b>Pseudo</label>
                                <div class="controls">
                                <input type="text" class="input-medium" id="input01">
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button class="btn">Cancel</button>
                            </div>
                        </fieldset>
                    
                </div>
            
                
                 AVATAR 
                <div class="tab-pane" id="tab2">
                    <form class="well form-horizontal">
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label"><b>Image actuelle</b></label>
                                <div class="controls">
                                    <ul class="thumbnails">
                                        <li class="span3">
                                            <a href="#" class="thumbnail">
                                                <img src="http://fc03.deviantart.net/fs71/f/2011/098/f/e/trollface_wallpaper_by_juliothechange-d3dhjlw.jpg" alt="">
                                            </a>
                                        </li>   
                                    </ul>
                                </div>
                                <div class="controls">
                                    <label class="control-label" for="Upluader une image">Upluader un Fichier</label>
                                    <div class="controls">
                                        <input class="input-file" id="fileInputimage" type="file">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div> -->

<?php
    pied();
?> 