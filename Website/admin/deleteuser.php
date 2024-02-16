<?php require('../Include/connection.php');
$id =$_GET["id"];
$query = "DELETE FROM `user_info` where id = '$id'";
// echo $query;die;
if ($connection->query($query) ==TRUE) {
    header ('Location:./userlist.php');
    
}
else
{
    echo $connection->error;
}
?>