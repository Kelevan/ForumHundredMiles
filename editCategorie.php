<?php
    include_once("./includes.php");
    entete("Modifier une catégorie");
    
    if(isset($_GET['id'])){                                
        $cat_connexion=query("select * from categorie where idCat=".$_GET['id']."");
        $row=mysql_fetch_array($cat_connexion);
    }
?> 
    <div class="container">
      <div class="row">          
        <div class="span12">
        <ul class="nav nav-tabs">
            <li><a href="./listeCategorie.php">Listes</a></li>
            <li><a href="./addCategorie.php">Ajouter une catégorie</a></li>
            <li><a href="./editCategorie.php">Modifier une categorie</a></li>
        </ul>  
        <h3>Modifier une catégorie</h3><br/>
        <div id="form_container">
            <div class="tab-pane active" id="tab1">
            <form class="well form-horizontal">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="input01"><b>Nom</b></label>
                    <div class="controls">
                        <!--<?php
                            echo"<input type='text' class='input-medium' id='Catnom' name='Catnom' value='".$row[1]."'>";
                        ?> -->  
                        <input type='text' class='input-medium' id='Catnom' name='Catnom' value=''>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input02"><b>Description</b></label>
                    <div class="controls">
                    <!--<?php
                            echo"<textarea class='input-xlarge' id='catTextarea' name='catTextarea' rows='3'>".$row[2]."</textarea>";
                        ?>-->
                        <textarea class='input-xlarge' id='catTextarea' name='catTextarea' rows='3'></textarea>
                    </div>
                </div> 
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">modifier</button>
                    <button type="reset" class="btn btn-warning">Annuler</button>
                </div>
            </fieldset>
            </form>	
            </div>
        </div>
        </div>
    </div>
<?php
    pied();
?>            