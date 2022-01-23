<?php
    echo 'Connecting to database............<br>';
    $servername="localhost";
    $username="root";
    $password="";

    $conn=mysqli_connect($servername,$username,$password);
    if(!$conn)
    {
        die("Connection failed.<br>ERROR-".mysqli_connect_error());
    }
    else
    {
        echo 'Connection was successful!';
    }
?>


