<?php
    $user = $_POST["username"];
    $h = fopen("users.txt", "r");
    if ($user == ""){
        echo"User name cannot be blank";
        echo"<a href='home.html'>return to homepage </a>";
        exit;
    }
    while( !feof($h) ){
        $name = fgets($h);
        if ($user == trim($name)){
            $url = "~ruihuang/myfiles.php?user" . $user;
            header('location: ' .$url);
            exit;
        }
    }
    fclose($h);

    echo"Invalid Username <br> <br>";
    echo"<a href='home.html'>return to homepage </a>";
?>
