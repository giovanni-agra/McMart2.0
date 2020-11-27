<?php

//set array to store error
$errors = array();//this array will determine which error is happening


$SKU = trim($_POST['SKU']);
if (empty($SKU)) {
    $errors[] = "You forgot to enter your SKU";
}

$Name = trim($_POST['Name']);
if (empty($Name)) {
    $errors[] = "You forgot to enter your Product Name";
}

$ProductCategory = trim($_POST['ProductCategory']);
if (empty($ProductCategory)) {
    $errors[] = "You forgot to enter your Product Category";

}
$Price = trim($_POST['Price']);
if (empty($Price)) {
    $errors[] = "You forgot to enter your Product Price";

}

$PictureURI = trim($_POST['PictureURI']);
if (empty($PictureURI)) {
    $errors[] = "You forgot to enter your Product Picture URI";
}

$StockAmount = trim($_POST['StockAmount']);
if (empty($StockAmount)) {
    $errors[] = "You forgot to enter your item Product Stock Amount";
}

$ProductDesc = trim($_POST['ProductDesc']);
if (empty($ProductDesc)) {
    $errors[] = "You forgot to enter your item Product Description";
}
$Status = "In-Stock";
$date=date("Y-m-d H:i:s");
//$status = "Not Fullfiled";
if (empty($errors)) {
    try {
        require('../includes/db.inc.php'); //caling db.inc to connect to db
        $query = "INSERT INTO products (SKU,Name,ProductCategory,Price,Status,PictureURI,DateRequests,StockAmount,ProductDesc )"; // querying sql function
        $query .= "VALUES(?,?,?,?,?,?,?,?,?) ";
        $q = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($q, $query);
        mysqli_stmt_bind_param($q, "sssssssss", $SKU,$Name,$ProductCategory,$Price,$Status,$PictureURI,$DateRequests,$StockAmount, $ProductDesc);
        mysqli_stmt_execute($q);
        if (mysqli_stmt_affected_rows($q) == 1) {
            echo "<script type='text/javascript'> document.location = '../index.php'; </script>";
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
        print "The system is buys please try later";
    } catch (Error $e) {
        print "The system is busy";
    }


} else {
    $errorstring = "Error! <br> The following errors occurred:<br>";
    foreach ($errors as $msg) {
        $errorstring .= "-$msg <br>\n";
    }
    $errorstring .= "please try again.<br>";
    echo "<p class='text-center col-sm-2 mx-auto' style='color:red'>$errorstring</p>";
}