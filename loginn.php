<?php 

    $email = "g211210018@sakarya.edu.tr";
    $pass = "g211210018";

    $_email = $_POST["mail"];
    $_pass = $_POST["password"];

    if(($_email == $email) && ($_pass == $pass))
    {
        echo "HOŞGELDİNİZ g211210018";
    }
    else
    {
        header("Location:login.html");
        exit();
    }


?>