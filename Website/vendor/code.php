<?php
    require  '../include/connection.php';

    if(isset($_POST['update_btn']))
        {
            $id = mysqli_real_escape_string($connection,$_POST['id']);

            $file = mysqli_real_escape_string($connection,$_POST['file']);
            $name = mysqli_real_escape_string($connection,$_POST['name']);
            $price = mysqli_real_escape_string($connection,$_POST['price']);
            $category = mysqli_real_escape_string($connection,$_POST['category']);

            $query = "UPDATE `product` SET file='$file', name='$name', price='$price', category='$category', WHERE id='$id'";
            $res = mysqli_query($connection,$query);

            if($res)
            {
                header('Location: viewpanel.php');
                exit(0);
            }
            else
            {
                header("Location: veiwpanel.php");
                exit(0);
            }
        }

?>