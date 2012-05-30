<?php
    include_once("./includes.php");
    entete("Administration");
?> 
      <div class="container">
      <div class="row">          
        <div class="span12">
          <div class="hero-unit">
            <h3>Supprimer un membre</h3><br/>
            <div id="form_container">
                <form method="post" action="transfert_supprimer_inscription.php">
                Numéro du membre : 
                <select name="Num_Adh">
                </select>
                <br/><br/>
                <input type="submit" value="Supprimer Mon Inscription" name="Supprimer"> <br/><br/><br/><br/><br/>

		</form>	
		
            </div>
        </div>
        </div>
      </div>
<?php
    pied();
?>          

