<?php require('../Include/connection.php'); ?>
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
            <h1>Add Product</h1><hr>
            <form method="get" action="vendorpanel.php">
                <input type="file" name="file" required><br><br>
                <label for="name">Product Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                <label for="price">Price:</label><br>
                <input type="number" id="price" name="price" min="0" step="0.01" required><br><br>
                <label for="category">Category:</label>
                <select id="category" name="category" required>
                    <option value="">Select Category</option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Kids">Kids</option>
                </select><br><br><br><br>
                <button type="submit">Add Product</button>
            </form>
            </div>
        </div>
    </section>
    <?php
        if(isset($_GET["name"]) && isset($_GET["name"]) && isset($_GET["price"]) && isset($_GET["category"])){
            $file = $_GET["file"];
            $name = $_GET["name"];
            $price = $_GET["price"];
            $category = $_GET["category"];
        
        // query insert into user_info with values
        $query = "INSERT INTO `product`(`file`, `name`, `price`, `category`) VALUES ('$file', '$name', '$price', '$category')";
        echo "<br>";
        echo "<br>"; 
        
        if($connection->query($query) == True){
            //redirect to a file that fetches all /jkl;\97
            header('location:./viewpanel.php');
        }
        else {
            echo $connection -> error;
        }
        }
    ?>
</body>

</html>