<?php
$conn=mysqli_connect('localhost','root','','pharmacy')or die ("conn failed".mysqli_connect_error());
echo "success conn";
$sql="create table medicine(med_code varchar(20),med_name varchar(20),med_Qnty int(11),u_price int(11),total int(11))";
$result=mysqli_query($conn,$sql)or die("no conn".$sql);
?>