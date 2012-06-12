<?php
    include_once("./db.php");

    query("UPDATE forum SET nomForum='".$_POST['nomForum']."', id_Cat='".$_POST['nomCat']."', idForumPere='".$_POST['forumPere']."' WHERE idForum='".$_POST['idForum']."'");
    header("location: ./listeForum.php");

?>

