<?php
    $host = explode("?", $_SERVER["REQUEST_URI"])[0];

    $num = substr_count($host, "/");
    $way = explode("/",$host)[$num];

    if($way == "" || $way == "index.php"){
        $responce == Controller::StartSite();
    }
    elseif($way == "books"){
        $responce = Controller::BookList();
    }
    elseif($way = "book"){
        if (isset($_GET["title"])){
            $title = $_GET["title"];
        }
        $responce = Ccontroller::BookOne($title);
    }
    else{
        $responce = Controller::error404();
    }
    
?>
