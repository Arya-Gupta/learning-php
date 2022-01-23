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

//Creating a table in the database
$sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result=mysqli_query($conn,$sql);

//Check for table creation success
if($result)
{
    echo "Table creation successfull!";
}
else
{
    echo "Table was not created successfully due to error: ".mysqli_error($conn);
}
?>
