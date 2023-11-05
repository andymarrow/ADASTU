<?php

    $database= new mysqli("localhost","root","","as_edu");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>