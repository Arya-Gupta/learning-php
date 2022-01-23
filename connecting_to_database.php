<?php
//We are using MySQLi extension to connect to MySQL database. This extension works only with MySQL database. PDO can work with multiple databases.
echo 'Connecting to database............<br>';

//Connecting to database
$servername="localhost";
$username="root";
$password="";

//Creating connection
$conn=mysqli_connect($servername,$username,$password);

//Die if connection was not successful
if(!$conn)
{
    die("Connection failed.<br>ERROR-".mysqli_connect_error());
}
else //else isn't needed here because the program execution is stopped if the die function is executed
{
    echo 'Connection was successful!';
}
?>






