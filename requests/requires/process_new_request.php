<?php

//set array to store error
$errors = array();//this array will determine which error is happening


$UserRequestName = trim($_POST['UserRequestName']);
if (empty($UserRequestName)) {
    $errors[] = "You forgot to enter your UserRequestName";
}

$UserRequestIdNumber = trim($_POST['UserRequestIDNumber']);
if (empty($UserRequestIdNumber)) {
    $errors[] = "You forgot to enter your UserRequestIDNumber";
}

$ItemName = trim($_POST['ItemName']);
if (empty($ItemName)) {
    $errors[] = "You forgot to enter your ItemName";

}
$ItemQuantity = trim($_POST['ItemQuantity']);
if (empty($ItemQuantity)) {
    $errors[] = "You forgot to enter your ItemQuantity";

}

$ProductCategory = trim($_POST['ProductCategory']);
if (empty($ProductCategory)) {
    $errors[] = "You forgot to enter your ProductCategory";
}

$ItemDescription = trim($_POST['ItemDescription']);
if (empty($ItemDescription)) {
    $errors[] = "You forgot to enter your item ItemDescription";
}
$Status = "Not fullfilled";
$date=date("Y-m-d H:i:s");
//$status = "Not Fullfiled";
if (empty($errors)) {
    try {
        require('../includes/db.inc.php'); //caling db.inc to connect to db
        $query = "INSERT INTO requests (ItemName,UserRequestName,UserRequestIDNumber,ProductCategory,RequestQuantity,ProductRequestDesc,DateRequests,Status )"; // querying sql function
        $query .= "VALUES(?,?,?,?,?,?,?,?) ";
        $q = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($q, $query);
        mysqli_stmt_bind_param($q, "ssssssss", $ItemName,$UserRequestName,$UserRequestIdNumber,$ProductCategory,$ItemQuantity,$ItemDescription,$date,$Status);
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