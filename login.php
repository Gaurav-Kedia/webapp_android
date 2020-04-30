<?php
require "init.php";
$user_name = "Gaurav kedia_sqllll";
$user_pass = "password@123";

$sql_query = "select name from user_info where user_name like '$user_name' and user_pass like '$user_pass';";
$result=mysqli_query($con,$sql_query);
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_assoc($result);
$name=$row["name"];
echo "<h3>Hello ".$name. "<h3>";
}
else
{
echo "No info is available";
}
?>