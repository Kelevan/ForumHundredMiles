<?php
    include_once("./includes.php");
    entete("Administration");
?> 
<html lang="en">
  <body>
    <div class="container">
      <div class="row">          
        <div class="span12">
          <div class="hero-unit">
            <h3>Modifier une catégorie</h3><br/>
            <div id="form_container">
		<form id="formulaire" class="appnitro"  method="post" action=".php">					
			<ul >
                            <li id="li_1">
                            <div class="left">
                            <label class="description" for="element_1">Numéro de la catégorie </label>
                            <select name="Num_Adh">
                            </select>
                            <br/>
                            </div><p class="guidelines" id="guide_2"><small>Obligatoire</small></p>
                            </li>
                            <li id="li_1" >                               
                                <span>
                                    <input id="Nom_Adh" name= "Nom_Adh" class="element text" maxlength="255" size="8" value=""/>
                                    <label>Nom de la catégorie</label>
                                    </span>
                                <span>
                                    <input id="Prenom_Adh" name= "Prenom_Adh" class="element text" maxlength="255" size="30" value=""/>
                                    <label>Description de la catégorie</label>
                                </span><p class="guidelines" id="guide_1"><small>Obligatoire</small></p> 
                            </li>   	
                            <li class="buttons">
                                <input type="hidden" name="form_id" value="146883" />
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Envoyer" />
				<input id="resetForm" class="button_text" type="reset" name="reset" value="Effacer"/>
                            </li>
			</ul>
		</form>	
            </div>
        </div>
      </div>
    </div>
<?php
    pied();
?>            
    </div>

  </body>
</html>