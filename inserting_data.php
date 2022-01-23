<?php

//Connecting to database
$servername="localhost";
$username="root";
$password="";
$database="mydatabase"; //specifying what database I want to use

//Creating connection
$conn=mysqli_connect($servername,$username,$password,$database);

//Die if connection was not successful
if(!$conn)
{
    die("Connection failed.<br>ERROR-".mysqli_connect_error());
}
else //else isn't needed here because the program execution is stopped if the die function is executed
{
    echo 'Connection was successful!<br>';
}

//Inserting data into table
$name="Rohit";
$destination="Kanpur";
$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result=mysqli_query($conn,$sql);

//Add a new trip to the trip table in the database
if($result)
{
    echo "Record has been inserted successfully";
}
else
{
    echo "Record was not inserted successfully due to error: ".mysqli_error($conn);
}
?>
