<?php
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
    echo 'Connection was successful!<br>';
}

//Creating database
$sql="CREATE DATABASE myDatabase4";
$result=mysqli_query($conn,$sql);
// echo 'The result is: '.var_dump($result).'<br>';

//Check for database creation success
if($result)
{
    echo "The database was created successfully";
}
else
{
    echo "The database creation failed due to error: ".mysqli_error($conn);
}
?>






