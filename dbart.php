<?php
$conn=new mysqli('localhost','root','') or die ("connection error".mysqli_connect_error());
echo "conn sucess";
$sql="CREATE DATABASE ART";
if (mysqli_query($conn,$sql))
{
    echo "Sucess";

}
else
{
    echo "fail".mysqli_error($conn);
}
?>

