<?php

//set array to store error
$errors = array();//this array will determine which error is happening


$SKU = trim($_POST['ProductSKU']);
if (empty($SKU)) {
    $errors[] = "You forgot to enter your SKU";
}

$Name = trim($_POST['ProductName']);
if (empty($Name)) {
    $errors[] = "You forgot to enter your Product Name";
}

$ProductCategory = trim($_POST['ProductCategory']);
if (empty($ProductCategory)) {
    $errors[] = "You forgot to enter your Product Category";

}
$Price = trim($_POST['ProductPrice']);
if (empty($Price)) {
    $errors[] = "You forgot to enter your Product Price";

}

$PictureURI = trim($_POST['ProductPictureURI']);
if (empty($PictureURI)) {
    $errors[] = "You forgot to enter your Product Picture URI";
}

$StockAmount = trim($_POST['ProductStockAmount']);
if (empty($StockAmount)) {
    $errors[] = "You forgot to enter your item Product Stock Amount";
}

$ProductDesc = trim($_POST['ProductDescription']);
if (empty($ProductDesc)) {
    $errors[] = "You forgot to enter your item Product Description";
}
$Status = trim($_POST['ProductStatus']);
if (empty($Status)) {
    $errors[] = "You forgot to enter your item Product Status";
}

$date=date("Y-m-d H:i:s");
//$status = "Not Fullfiled";
if (empty($errors)) {
    try {
        require('../includes/db.inc.php'); //caling db.inc to connect to db
        $query = "INSERT INTO products (DateAdded,SKU,Name,ProductCategory,Price,Status,PictureURI,StockAmount,ProductDesc )"; // querying sql function
        $query .= "VALUES(?,?,?,?,?,?,?,?,?) ";
        $q = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($q, $query);
        mysqli_stmt_bind_param($q, "sssssssss", $date,$SKU,$Name,$ProductCategory,$Price,$Status,$PictureURI,$StockAmount, $ProductDesc);
        mysqli_stmt_execute($q);
        if (mysqli_stmt_affected_rows($q) == 1) {
            echo "<script type='text/javascript'> document.location = '/McMart2.0/products/new_products.php'; </script>";
            exit();
        } else {
            $errorstring = "<p class ='text-center col-sm-8 mx-auto' style='color:red'>";
            $errorstring .= "System Error<br/>your reuqest could not be registered due ";
            $errorstring .= "to a system error. we apologize for any invonvenience.</p>";
            echo " <p class=' text-center col-sm-2 mx-auto' style='color:red'>$errorstring</p>";
            echo '<p>' . mysqli_error($conn) . '<br><br>Query:' . $query . '</p>';
            mysqli_close($conn);
            exit();
        }


    } catch (Exception $e) {
        print '<div class=/"alert alert-danger/" role=/"alert/">
        The System is busy, please try again later.
        </div>';
    } catch (Error $e) {
        print '<div class=/"alert alert-danger/" role=/"alert/">
        The System is busy.
        </div>';
    }


} else {
    $errorstring = '<div class=/"alert alert-danger/" role=/"alert/">
    Error! <br> The following errors occurred:<br>.
    </div>';
    foreach ($errors as $msg) {
        $errorstring .= "-$msg <br>\n";
    }
    $errorstring .= '<div class=/"alert alert-danger/" role=/"alert/">
    Please try again later.
    </div>';
    echo "<p class='text-center col-sm-2 mx-auto' style='color:red'>$errorstring</p>";
}