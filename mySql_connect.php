<?php
    echo "<h1>Connecting MySQL using php</h1>";
    echo "<br>";

    // Ways to connect to a MySQL database 
    // 1) MySqli extension
    // 2) PDO

    // Connecting to a database

    $servername = "localhost";
    $username = "root";
    $password = "ii";

    // Creating a connection 
    $connect = mysqli_connect($servername,$username,$password);

    if(!$connect){
        die("Sorry we fail to connect ". mysqli_connect_error());
        echo "<br>";
    }else{
        echo "Woorah !!  we have established a connection ";
        echo "<br>";
    }

?>