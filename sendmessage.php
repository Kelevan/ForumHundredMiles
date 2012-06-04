<?php
    include_once("./includes.php");
    entete("Topic");
?>  
  
<!--------------------------------BODY------------------------------------->  
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="./index.php">Home</a> <span class="divider">/</span>
                <a href="./categorie.php">Musique</a><span class="divider">/</span>
                <a href="./forum.php">Lycris</a><span class="divider">/</span>
                <a href="./topic.php">Lyrics</a><span class="divider">/</span>
                <a href="./message.php">You&nbsp;See</a></span>
            </li>
        </ul>
      
      
      
      <!------------MESSAGE---------------->  
      
      <form method="post" action="somepage" class="well">
            <textarea name="content" style="width:50%"></textarea>            
            <div class="control-group">
                <label class="control-label" for="Upluader un Fichier">Uploader&nbsp;un&nbsp;Fichier</label>
                <div class="controls">
                    <input class="input-file" id="fileInput" type="file">
                </div> 
            </div>            
      </form>
      
            <div class="btn-group form-actions">
                <div class="row">
                    <div class="span1"> <button type="submit" class="btn btn-success">Répondre</button></div>
                    <div class="span1"> <a href="./message.php" class="btn btn-warning">Anuler</a></div>                    
                </div>
            </div>
<?php
    pied();
?>            