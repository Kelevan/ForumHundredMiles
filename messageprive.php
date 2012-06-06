<?php
    include_once("./includes.php");
    entete("Message Privé");
?>

    <div class="container">
        <ul class="pager">
            <li class="previous">
                <a href="./messagerie.php"><i class="icon-envelope"></i> Messagerie</a>
            </li>
        </ul>
        <form class="well">
            <fieldset>
            <table class="table table-bordered table-condensed">
                <tbody>
                    <tr class="row">
                        <td>Valou <br/> image </td>
                        <td>Yop, Thomas !! D'autres modification pour les MPs ????</td>
                    </tr>
                </tbody>
            </table>
            <textarea name="content" style="width:50%"></textarea>   
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Répondre</button>
            </div>
            </fieldset>
        </form>

        
        
<?php
    pied();
?>              
