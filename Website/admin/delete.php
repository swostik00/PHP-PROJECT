<?php require('../Include/connection.php');
$id =$_GET["id"];
$query = "DELETE FROM `product` where id = '$id'";
// echo $query;die;
if ($connection->query($query) ==TRUE) {
    header ('Location:./viewpanel.php');
    
}
else
{
    echo $connection->error;
}
?>