<?php
    include_once("./includes.php");
    entete("Administration");
?>

    <div class="container">
        <form>
             <ul class="breadcrumb">
                <li>
                    <a href="./messagerie.php">Messagerie</a>
                </li>
            </ul>
            <div class="form-actions">               
                <table class="table table-bordered table-condensed">
                    <tbody>
                        <tr class="row">
                            <td>Valou <br/> image </td>
                            <td>Yop, Thomas !! D'autres modification pour les MPs ????</td>
                        </tr>
                    </tbody>
                </table>
                         
                <textarea name="content" style="width:50%"></textarea>                          
                <div>     
                    <div class="form-actions">
                        <div class="row">
                            <div class="span1"> <button type="submit" class="btn btn-success">Répondre</button></div>                
                        </div>
                    </div>     
                </div>
            </div>
        </form>
        
<?php
    pied();
?>              
