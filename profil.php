<?php
    include_once("./includes.php");
    entete("Administration");
?> 
  
    <div class="container">
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Information</a></li>
                <li><a href="#tab2" data-toggle="tab">Avatar</a></li>
            </ul>
            <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid rgb(221, 221, 221);">
                
                <!----------- INFORMATION ------------->
                <div class="tab-pane active" id="tab1">
                    <form class="well form-horizontal">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="input01">Text input</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="input01">
              <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="optionsCheckbox">Checkbox</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="optionsCheckbox" value="option1">
                Option one is this and that&mdash;be sure to include why it's great
              </label>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="select01">Select list</label>
            <div class="controls">
              <select id="select01">
                <option>something</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="multiSelect">Multicon-select</label>
            <div class="controls">
              <select multiple="multiple" id="multiSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="fileInput">File input</label>
            <div class="controls">
              <input class="input-file" id="fileInput" type="file">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="textarea">Textarea</label>
            <div class="controls">
              <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
                </div>
                
                <!----------- AVATAR ------------->
                <div class="tab-pane" id="tab2">
                    <form class=" well form-horizontal">
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
            
            
            
            
          <!-- <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid rgb(221, 221, 221);">
    ONGLET INFORMATION
                <div class="tab-pane active" id="tab1">
                    ENREGISTREMENT
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
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                            <label class="control-label"><b>Changer&nbsp;de&nbsp;mot&nbsp;de&nbsp;passe&nbsp;:*</b></label>
                            <a class="btn btn-primary" href="./modifmdp.php">Modifier</a>
                        </div>
                    </div>
                </div>
    ONGLET AVATAR
                <div class="tab-pane" id="tab2">
                    <h2>Avatar</h2>
                    <div class="form-actions">
                        <div>
                            <h3>Image actuelle</h3>
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
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

<?php
    pied();
?> 