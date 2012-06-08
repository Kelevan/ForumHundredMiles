<?php
    include_once("./includes.php");
    entete("Sendmessage");
    verif_connexion();
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
            <div class="form-actions">                
                <button type="submit" class="btn btn-success">Répondre&nbsp;<i class="icon-pencil icon-white"></i></button>
                <a href="./message.php" class="btn btn-warning">Anuler</a>                  
            </div>
    </form>
       
<?php
    pied();
?>            