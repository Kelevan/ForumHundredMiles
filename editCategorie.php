<?php
    include_once("./includes.php");
    entete("Modifier une catégorie");
    verif_connexion();
    
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
        </ul>  
        <h3>Modifier une catégorie</h3><br/>
        <div id="form_container">
            <div class="tab-pane active" id="tab1">
            <form class="well form-horizontal">
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="input01"><b>Nom</b></label>
                    <div class="controls">
                        <?php
                            echo"<input type='text' class='input' id='catNom' name='catNom' value='".$row[1]."'>";
                        ?>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input02"><b>Description</b></label>
                    <div class="controls">
                        <?php
                            echo"<textarea class='input-xlarge' id='catTextarea' name='catTextarea' rows='3'>".$row[2]."</textarea>";
                        ?>
                    </div>
                </div> 
                <div class="form-actions">
                    <?php
                        echo"<a class='btn btn-primary' href='./updateCategorie.php?id=".$row[0]."'>Modifier</a>
                            <a class='btn btn-warning' href='./listeCategorie.php'>Anuler</a>"
                    ?>
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