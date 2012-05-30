<?php
    include_once("./includes.php");
    entete("Administration");
?>   
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
                        <div class="span1"> <button class="btn btn-info">Aperçu</button></div>
                        <div class="span1"> <button class="btn btn-inverse">Annuler</button></div>                    
                    </div>
                </div>     
            </div>  
         </div>
<?php
    pied();
?>              
     </fieldset>