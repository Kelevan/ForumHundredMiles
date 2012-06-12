<?php
    include_once("./includes.php");
    entete("Message privé");
    verif_connexion();
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
                    <li><a href="./audio/SleepAway.mp3">2 see</a><span><h6>06/06/12</h6></span></li>
                    <li class="nav-header">Uploader&nbsp;un&nbsp;Fichier</li>
                    <li>
                        <div class="btn-group">
                            <a href="./upload.php" class="btn btn-info">Upload</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="span9">   
            <form class="well">
                <legend><a href="./message.php">>&nbsp;You&nbsp;see</a></legend>
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th colspan="2"><h6>Mercredi 6 Juin 2012 <a class="btn btn-small pull-right" href="./editmessage.php"><i class="icon-edit"></i></a></h6></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Valou <br/> image </td>
                            <td>Salut !</td>
                        </tr>                        
                    </tbody>
                </table>
                <table class="table table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th colspan="2"><h6>Mercredi7 Juin 2012 <a class="btn btn-small pull-right" href="./editmessage.php"><i class="icon-edit"></i></a></h6></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Thom <br/> image </td>
                            <td>HEUREUSEMENT QUE THOMAS EST PLUS BRINGGGGGGGGGGGGGGGGGGGGGGG MEEEEEEEEEEEEEEEEEEEEEEEEEEE QUE PINKIE BILLY SINON ON SERAIT PAS DANS LE CACA</td>
                        </tr>
                    </tbody>
                </table>  
            </form>

            <div class="pagination">
                <ul>            
                    <li><a href="#"><i class="icon-chevron-left"></i></a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li><a href="#"><i class="icon-chevron-right"></i></a></li>            
                </ul>  
            </div>

            <div class="btn-group form-actions">
                <a href="./sendmessage.php" class="btn btn-success">Répondre&nbsp;<i class="icon-pencil icon-white"></i></a>
            </div>
        </div>    
  </div>
<?php
    pied();
?>      
