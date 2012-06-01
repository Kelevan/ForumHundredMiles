<?php
    include_once("./includes.php");
    entete("Administration");
?> 
<!--------- Editeur de text -------->
    <script type="text/javascript" src="./js/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
    tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "bullist,numlist,|,blockquote,|,undo,redo,|,link,unlink,anchor,image,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "sub,sup,|,emotions,iespell,media,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",   
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver"


    });
    </script>
  </head>
  
    <div class="container">
        <div class="form-actions">
            <table class="table table-bordered table-condensed">
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
        </div>
        <div class="form-actions"> 
            <textarea name="content" style="width:50%"></textarea>                          
            <div>     
                <div class="form-actions">
                    <div class="row">
                        <div class="span1"> <button type="submit" class="btn btn-success">Répondre</button></div>
                        <div class="span1"> <button class="btn btn-info">Aperçu</button></div>
                        <div class="span1"> <button class="btn btn-inverse">Annuler</button></div>                    
                    </div>
                </div>     
            </div>
        </div>
    </div>
        
<?php
    pied();
?>              
