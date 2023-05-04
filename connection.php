<?php
    $serverName="localhost";
    $DatabaseUserName="root";
    $Password="";
    $dbName = "portal";
    $conn=new mysqli($serverName, $DatabaseUserName, $Password);
    mysqli_select_db( $conn, $dbName );

    if(! $conn)
    {
    die("something went wrong".$conn->connect_error);
    }
    
?>