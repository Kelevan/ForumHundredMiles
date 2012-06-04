<?php
    include_once("./includes.php");
    entete("Messagerie");
?> 
   
    <div class="container">
        <form>
            <div class="form-actions">
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th><h4>Sujets</h4></th>
                            <th><h4>Auteur</h4></th>
                            <th><h4>Sélection</h4></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="./messageprive.php">NewParôle</a></td>
                            <td><a href="#">Val</a></td>
                            <td><label class="checkbox"><input type="checkbox"></label></td>
                        </tr>
                        <tr>
                            <td><a href="#">Song</a></td>
                            <td><a href="#">Titi</a></td>
                            <td><label class="checkbox"><input type="checkbox"></label></td>
                        </tr>
                        <tr>
                            <td><a href="#">Parôle Of the dead</a></td>
                            <td><a href="#">Val</a></td>
                            <td><label class="checkbox"><input type="checkbox"></label></td>
                        </tr>
                        <tr>
                            <td><a href="#">Guitard</a></td>
                            <td><a href="#">Toto</a></td>
                            <td><label class="checkbox"><input type="checkbox"></label></td>
                        </tr>
                        <tr>
                            <td><a href="#">Intro</a></td>
                            <td><a href="#">Val</a></td>
                            <td><label class="checkbox"><input type="checkbox"></label></td>
                        </tr>
                    </tbody>
                </table>
                <div class="pull-right"> 
                    <button type="submit" class="btn btn-success">Supprimer</button>
                </div>
            </div>    
        </form>
<?php
    pied();
?>              
