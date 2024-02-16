<?php require('../Include/connection.php');
if(isset($_GET["id"])){
$id = $_GET["id"];

$query = "SELECT * FROM `product` where id = '$id' limit 1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
}
?>
<!-- <php require('../Include/connection.php');
$query = "SELECT * FROM product";
$result = mysqli_query($connection, $query);
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav>
            <div class="navi">
                <div class="logo">
                    <h3>yakthung<span>Ipa</span></h3>
                </div>
                <div class="navigator">
                    <ul>
                        <li><a href="../PHP/product.php">Logout</a></li>
                    </ul>
            </div>
        </div>
        </nav>
        <hr class="hr">
    </header>
    <section id="vendor">
        <div class="dashboard">
            <h4>Vendor Panel</h4>
            <hr>
            <div class="crud">
                <button><a href="./vendorpanel.php">Insert Product</a></button>
                <button><a href="./viewpanel.php">View Product</a></button>
            </div>
        </div>
        <div class="cont">
            <div class="div">
            <h1>Update Product</h1><hr>
                
            <form action="./update.php" method="post">
                ID:<input type="text" name="id" value="<?php echo $id?>"hidden>
                Image: <input type="file" name = "file" required> <br> <br>
                Name: <input type="text"  name = "name" ><br><br>
                Price: <input type="text" name="price"><br><br>
                Category: <input type="text" name="category"><br><br>
                <button type="submit">Update</button>
            </form>
<?PHP
    if(isset($_GET["id"]) && isset($_GET["file"]) && isset($_GET["name"]) && isset($_GET["price"]) && isset($_GET["category"])){
        $id = $_POST['id'];
        $file = $_POST['file'];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $category = $_POST["category"];

        $query = "UPDATE product SET file = '$file', name = '$name', price = '$price', category = '$category' WHERE id = '$id'";
        if($connection->query($query) == TRUE){
            //redirect to a file that fetches all data
            header('location:./viewpanel.php');
        }
        else {
            echo $connection -> error;
        }
    }?>

            </div>
        </div>
    </section>

</body>
</html>