<?php
require 'connection.php';
$code=$_POST['code'];
$name=$_POST['name'];
$nos=$_POST['qu'];
$uprice=$_POST['price'];
$total=$nos*$uprice;

$sql = "insert into medicine (med_code,med_name,med_Qnty,u_price,total)values('$code','$name','$nos','$uprice','$total')";


if(mysqli_query($conn,$sql))
{
     ?>
    <script>
        alert("Data Added");
        window.location.replace('pharmacy_index.php');
    </script>
   <?php
    
}
?>

