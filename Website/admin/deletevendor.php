<?php require('../Include/connection.php');
$id =$_GET["id"];
$query = "DELETE FROM `vendor_info` where id = '$id'";
// echo $query;die;
if ($connection->query($query) ==TRUE) {
    header ('Location:./vendorlist.php');
    
}
else
{
    echo $connection->error;
}
?>