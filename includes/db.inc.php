<?php

DEFINE('DB_USER', 'root'); // or whatever userid you created
DEFINE('DB_PASSWORD', 'wordpass123'); // or whatever password you created
DEFINE('DB_HOST', '127.0.0.1');
DEFINE('DB_NAME', 'mcmart');

try {
    // Make the connection:
    $conn = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
    // Set the encoding...optional but recommended
    mysqli_set_charset($conn, 'utf8');
    if (mysqli_connect_errno())
    {
//        echo "Failed To Connect".mysqli_connect_error();
        exit();

    }else{
//        echo "connected to db";

    }
}
catch (Exception $e) {
    //print "An exception occurred. Message: " . $e->getMessage();
    print "The system is busy. Please try later";
}
catch (Error $e) {
    //print "An error occurred. Message: " . $e->getMessage();
    print "The system is busy. Please try later";
}
?>