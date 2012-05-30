<?php
    include_once("./includes.php");
    entete("Administration");
?> 
    <div class="container">
        <ul class="nav nav-tabs">
        <li><a href="./listeMembre">Listes</a></li>
        <li><a href="./addMembre.php">Ajouter un membre</a></li>
        <li><a href="./editMembre.php">Modifier un membre</a></li>
        </ul> 
      <div class="row">          
        <div class="span12">
          <div class="hero-unit">
            <h3>Modifier un membre</h3><br/>
            <div id="form_container">
		<form id="formulaire" class="appnitro"  method="post" action=".php">	
                     
                    <ul >
                        <li id="li_1">
                            <div class="left">
                            <label class="description" for="element_1">Numéro du membre </label>
                            <select name="Num_Adh">
                            </select>
                            <br/>
                            </div><p class="guidelines" id="guide_2"><small>Obligatoire</small></p>
                        </li>
                        <li id="li_1" >
                            <label class="description" for="element_1">Nom et Prenom </label>
                            <span>
                            <input id="Nom_Adh" name= "Nom_Adh" class="element text" maxlength="255" size="8" value=""/>
                            <label>Nom</label>
                            </span>
                            <span>
                                    <input id="Prenom_Adh" name= "Prenom_Adh" class="element text" maxlength="255" size="14" value=""/>
                                    <label>Prenom</label>
                            </span><p class="guidelines" id="guide_1"><small>Obligatoire</small></p> 
                        </li>		
                        <li id="li_4" >
                            <label class="description" for="Mel_Adh">Email </label>
                            <div>
                            <input id="Mel_Adh" name="Mel_Adh" class="element text medium" type="text" maxlength="255" value=""/> 
                            </div><p class="guidelines" id="guide_4"><small>Obligatoire</small></p> 
                        </li>
                        <label class="description" for="element_2">Mot de passe  </label>
                        <li id="li_1" >
                            <div class="left">
                            <input id="Pass_Adh" name="Pass_Adh" class="element text medium" maxlength="15" value="" type="password">
                            <label for="Pass_Adh">Mot de passe</label>
                            </div><p class="guidelines" id="guide_2"><small>Obligatoire</small></p>
                            <div class="left">
                            <input id="Pass_Adh" name="Pass_Adh" class="element text medium" maxlength="15" value="" type="password">
                            <label for="Pass_Adh">Confirmation du Mot de passe</label>
                            </div><p class="guidelines" id="guide_2"><small>Obligatoire</small></p>	
			<li class="buttons">
			    <input type="hidden" name="form_id" value="146883" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Envoyer" />
				<input id="resetForm" class="button_text" type="reset" name="reset" value="Effacer"/>
                        </li>
                    </ul>
		</form>		
            </div>
<?php
    pied();
?>           