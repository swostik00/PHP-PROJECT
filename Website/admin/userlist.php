<?php require('../Include/connection.php');
$query = "SELECT * FROM user_info";
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
    <section id="admin">
        <div class="dashboard">
            <h4>Admin Panel</h4>
            <hr>
            <div class="crud">
                <button><a href="./adminpanel.php">Insert Product</a></button>
                <button><a href="./viewpanel.php">View Product</a></button>
                <button><a href="./vendorlist.php">Vendor List</a></button>
                <button><a href="./userlist.php">User List</a></button>
                <button><a href="#">Order List</a></button>
            </div>
        </div>
        <div class="cont1">
            <div class="div1">
            <h1>View Users</h1><hr>
    <?php if (mysqli_num_rows($result)> 0) {?>
        <table>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th colspan="2">Action</th>
            </tr>
            <?php while($row = mysqli_fetch_array($result)){?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><a href = "deleteuser.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
                <?php } ?>  
        </table>
        <?php
    } 
    else{
        echo "No data";
    }
    ?>
</body>

</html>