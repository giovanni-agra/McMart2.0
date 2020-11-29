<?php
//
require_once("../includes/db.inc.php");
require ("requires/product_operation.php");
//if(isset($_POST['delete'])){
//    global $a ;
//    $a = isset($_POST['RequestsID']) ;
//    $sql = "DELETE FROM requests WHERE RequestID='$a'";
//    if(mysqli_query($conn,$sql)){
//        $message = "Requests With ID: $a  Deleted";
//        echo "<script type='text/javascript'>alert('$message');</script>";
//        echo "<script type='text/javascript'> document.location = 'request_list.php'; </script>";
//        exit();
//    }else{
//        $message = "Requests Failed to be Deleted.Please Contact Administrator";
//        echo "<script type='text/javascript'>alert('$message');</script>";
////        echo '<p>' . mysqli_error($conn) . '<br><br>Query:' . $sql . '</p>';
//        echo "<script type='text/javascript'> document.location = 'request_list.php'; </script>";
//        mysqli_close($conn);
//        exit();
//    }
//}
//?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

    <style>
        .btnLogin {
            padding: 13px;
            background-color: #5d9cec;
            color: #f5f7fa;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
            border: #5791da 1px solid;
            font-size: 1.1em;
        }

        .demo-input-box {
            padding: 13px;
            border: #CCC 1px solid;
            border-radius: 4px;
            width: 100%;
        }

    </style>

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">

        <?php include('../includes/nav_bar.php'); ?>

    </div>
</nav>

<br>
<h1 class="text-center">Products</h1>
<br>
<hr>
<br>

<!--- view page --->



<div class="container-fluid">
    <?php

    //    $servername = "127.0.0";
    //    $username = "root";
    //    $password = "wordpass123";
    //    $dbname = "mcmart";
    //
    //    $conn = new mysqli($servername, $username, $password, $dbname);
    //    // Check connection
    //    if ($conn->connect_error) {
    //        die("Connection failed: " . $conn->connect_error);
    //    }


    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table class="table table-bordered">    
                    <tr class="table-primary">
                     <th scope="col">Product ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">SKU</th>
                    <th scope="col">Product Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Picture URL</th>
                    <th scope="col">Stock Amount</th>
                    <th scope="col">Product Description</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    
                    </tr>';
        while ($row = $result->fetch_assoc()) {

            echo '<form method="POST" action="">
                    <tr>
                    <input hidden type="text" name="ProductId" value="' . $row['ProductId'] . '" />
                    <td>' . $row['ProductId'] . '</td>
                   <td><input class="demo-input-box" type="text" name="Name" value="' . $row['Name'] . '" /></td>
                   <td><input type="text" name="SKU" class="demo-input-box" value="' . $row['SKU'] . '" /></td>
                   <td><select class="form-control" name="ProductCategory" id="ProductCategory" >
                              <option value="Books"'; if($row['ProductCategory'] == 'Books'){ echo "selected";}  echo'>Books</option>
                              <option value="Food"'; if($row['ProductCategory'] == 'Food'){ echo "selected";}  echo'>Food</option>
                              <option value="Medicine"'; if($row['ProductCategory'] == 'Medicine'){ echo "selected";}  echo'>Medicine</option>
                              <option value="Stationary"'; if($row['ProductCategory'] == 'Stationary'){ echo "selected";}  echo'>Stationary</option>
                              <option value="Uniform"'; if($row['ProductCategory'] == 'Uniform'){ echo "selected";}  echo'>Uniform</option>
                              <option value="Others"'; if($row['ProductCategory'] == 'Others'){ echo "selected";}  echo'>Others</option>

                            </select></td>
                   <td><input class="demo-input-box" type="number" name="Price" value="' . $row['Price'] . '" /></td>
                   <td><select class="form-control" name="Status" id="Status" >
                                  <option value="In Stock"'; if($row['Status'] == 'In Stock'){ echo "selected";}  echo'>In Stock</option>
                              <option value="Out of Stock"'; if($row['Status'] == 'Out of Stock'){ echo "selected";}  echo'>Out of Stock</option>



                   </select></td>
                   <td><input class="demo-input-box" type="text" name="PictureURI" value="' . $row['PictureURI'] . '" /></td>
                   <td><input class="demo-input-box" type="text" name="StockAmount" value="' . $row['StockAmount'] . '" /></td>
                       <td><input class="demo-input-box" type="text" name="ProductDesc"  value="' . $row['ProductDesc'] . '" /></td>
                   
                   <td><input type="submit" value="Update" name="update" class="btn btn-success"/></td>
                   <td><input type="submit" value="Delete" name="delete" class="btn btn-danger"/></td>
                    </tr>
               </form> ';
        }

        echo '</table>';
    }else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>




<!-- Footer -->
<nav class="static-bottom">
            <div class="container">
                <?php include('../includes/footer.php'); ?>
            </div>
</nav>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>


