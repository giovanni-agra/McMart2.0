<?php
//
//require_once("../includes/db.inc.php");
//require ("requires/request_operation.php");
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
        <h2 class="text-center">NEW PRODUCTS</h2>
        <br>
        <br>

        <div class="container mb-5 justify-content-center">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                require('requires/process_new_product.php');
            }
            ?>

            <form action="new_products.php" id="regform" method="POST" name="regform"  enctype="multipart/form-data" onsubmit="return checked();">
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="ProductName">Product Name: </label>
                            <input type="text" class="demo-input-box" name="ProductName" id="ProductName" placeholder="Type ProductName" required
                                    value="<?php if(isset($_POST['ProductName'])) echo $_POST['ProductName']; ?>" >
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="ProductSKU">Product SKU: </label>
                            <input type="text" class="demo-input-box" name="ProductSKU" id="ProductSKU" placeholder="Type ProductSKU"
                                    value="<?php if(isset($_POST['ProductSKU'])) echo $_POST['ProductSKU']; ?>" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="text">Product Category: </label>
                            <select id="ProductCategory" name="ProductCategory" class="form-control">
                                <option value="Books">Books</option>
                                <option value="Food">Food</option>
                                <option value="Medicine">Medicine</option>
                                <option value="Stationary">Stationary</option>
                                <option value="Uniform">Uniform</option>
                                <option value="Others">Others</option>

                                <?php if (isset($_POST['ProductCategory'])) echo $_POST['ProductCategory'];
                                ?>
                            </select>

                        </div>
                    </div>
                    <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="ProductPrice">Product Price ฿: </label>

                        <input type="number" class="demo-input-box" name="ProductPrice" id="ProductPrice" placeholder="Type Product Price in Bath ฿"
                               value="<?php if(isset($_POST['ProductPrice'])) echo $_POST['ProductPrice']; ?>" required>
                    </div>
                </div>
<hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="text">Product Status: </label>
                        <select id="ProductStatus" name="ProductStatus" class="form-control">
                            <option value="In Stock">In Stock</option>
                            <option value="Out Of Stock">Out of Stock</option>


                            <?php if (isset($_POST['ProductStatus'])) echo $_POST['ProductStatus'];
                            ?>
                        </select>

                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="ProductPictureURI">Product Picture URL: </label>

                        <input type="text" class="demo-input-box" name="ProductPictureURI" id="ProductPictureURI" placeholder="Type ProductPictureURL"
                               value="<?php if(isset($_POST['ProductPictureURI'])) echo $_POST['ProductPictureURI']; ?>" required>
                    </div>
                </div>

<hr>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="ProductStockAmount">Product Stock Amount: </label>

                        <input type="number" class="demo-input-box" name="ProductStockAmount" id="ProductStockAmount" placeholder="Type ProductStockAmount"
                               value="<?php if(isset($_POST['ProductStockAmount'])) echo $_POST['ProductStockAmount']; ?>" required>
                    </div>
                </div>

                <hr>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="ProductDescription">Product Description: </label>
                        </div>
                        
                            <textarea class="form-control rounded-0" name="ProductDescription" id="ProductDescription" rows="4" value="<?php if(isset($_POST['ProductDescription'])) echo $_POST['ProductDescription']; ?>"> </textarea>
                        
                    </div>
                <hr>
                <div class="mt-3">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </div>
                    <hr>    
                

            </form>

        </div>

        <nav class="static-top">
            <div class="container">
                <?php include('../includes/footer.php'); ?>
            </div>
        </nav>
    </body>

</html>