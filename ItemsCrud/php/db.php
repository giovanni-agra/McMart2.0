<?php

function Createdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "itemstore";

    // create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check Connection
    if (!$con) {
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if (mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "
                        CREATE TABLE IF NOT EXISTS items(
                            id INT(11) PRIMARY KEY,
                            item_name VARCHAR (50) NOT NULL,
                            item_description VARCHAR (60),
                            item_price FLOAT,
                            item_amount INT
                        );
        ";

        if (mysqli_query($con, $sql)) {
            return $con;
        } else {
            echo "Cannot Create table...!";
        }

    } else {
        echo "Error while creating database " . mysqli_error($con);
    }

}
