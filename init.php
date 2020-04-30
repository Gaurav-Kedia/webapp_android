<?php
$db_name="my_db";
$mysql_user="root";
$mysql_pass="";
$server_name="localhost";

$con=mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name,"3308");
if(!$con)
{
//echo "Connection error gaurav".mysqli_connect_error();
}
else
{
//echo "<h3>Database Connection Success gaurav....<h3>";
}
?>