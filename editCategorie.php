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
        <h3>Modifier une catégorie</h3><br/><div id="form_container">            
            <form class="well form-horizontal" method="post" action="./updateCategorie.php">
                <fieldset>
                    <?php
                        "<input type='text hidden' id='idCate' name='idCate' value='".$_GET['id']."'>";
                    ?> 
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
                        <div class="control-group">
                            <button type="submit" class="btn">Modifier</button>
                            <a class='btn btn-warning' href='./listeCategorie.php'>Anuler</a>
                        </div>
                    </div>
                </fieldset>
            </form>	
        </div>
    </div>
<?php
    pied();
?>            