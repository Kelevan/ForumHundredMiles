<?php
    include_once("./includes.php");
    entete("Message privé");
?>       
<div class="container">    
    <ul class="breadcrumb">
        <li>
            <a href="./index.php">Home</a> <span class="divider">/</span>
            <a href="./categorie.php">Musique</a> <span class="divider">/</span>
            <a href="./forum.php">Lyrics</a> <span class="divider">/</span>
            <a href="./topic.php">Topic Lyrics</a> <span class="divider">/</span>
            <a href="./message.php">You See</a>
        </li>        
    </ul>
    
    <div class="row">
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">Dernier&nbsp;fichier&nbsp;upload</li>
                    <li><a href="./audio/SleepAway.mp3">2 see</a></li>
                    <li class="nav-header">Uploader&nbsp;un&nbsp;Fichier</li>
                    <li><input class="input-file" id="fileInput" type="file"></li>
                </ul>
            </div>
        </div>
        
        <div class="span9">   
            <form class="well">
                <table class="table table-bordered table-condensed">
                    <legend><a href="./message.php">>&nbsp;You&nbsp;see</a></legend>
                    <tbody>
                        <tr class="row">
                            <td>Valou <br/> image </td>
                            <td><a href="./message.php">Salut les pd ! fvrezjikrvojreoi  gjh iogr hhjnoi gjhi  j kogrp gtjio grr htr gri jgtrio grtz gjio gpb tr jibgop b hgtr,io p  nhtip hjgjtog bniogtp   jp   gtnjiohtjkhtrjioohrjikop   jhuhntglm b njiobh  bhntjnio  hy,,jiko hty  </a></td>
                        </tr>
                        <tr class="row">
                            <td>Thom <br/> image </td>
                            <td><a href="./message.php">HEUREUSEMENT QUE THOMAS EST PLUS BRINGGGGGGGGGGGGGGGGGGGGGGG MEEEEEEEEEEEEEEEEEEEEEEEEEEE QUE PINKIE BILLY SINON ON SERAIT PAS DANS LE CACA </a></td>
                        </tr>
                    </tbody>
                </table>  
            </form>

            <div class="pagination">
                <ul>            
                    <li><a href="#">Prev</a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>            
                </ul>  
            </div>

            <div class="btn-group form-actions">
                <a href="./sendmessage.php" class="btn btn-success">Répondre</a>
            </div>

        </div>    
  </div>
<?php
    pied();
?>      
