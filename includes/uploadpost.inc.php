<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = $_SESSION["userid"];
    $content = htmlspecialchars($_POST["content"], ENT_QUOTES, "UTF-8");

    include "../classes/dbh.classes.php";
    include "../classes/postinfo.classes.php";
    include "../classes/postinfo-contr.classes.php";
    $postInfo = new PostInfoContr($id);


    $postInfo->makeNewPostInfo($content);

    header("location: ../index.php?error=none");

}