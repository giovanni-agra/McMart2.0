<?php

DEFINE('DB_USER', ''); // or whatever userid you created
DEFINE('DB_PASSWORD', 'P@'); // or whatever password you created
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', '');

try {
    // Make the connection:
    $conn = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
    // Set the encoding...optional but recommended
    mysqli_set_charset($conn, 'utf8');

//    echo "project/includes/db.inc.final.project is connected";
}
catch (Exception $e) {
    //print "An exception occurred. Message: " . $e->getMessage();
    print "The system is busy. Please try later";
}
catch (Error $e) {
    //print "An error occurred. Message: " . $e->getMessage();
    print "The system is busy. Please try later";
}