<?php


require_once("product_component.php");
require_once("../includes/db.inc.php");


// create button click
//if (isset($_POST['create'])) {
////    echo "<script>console.log('point')</script>";
//    createData();
//}

if (isset($_POST['update'])) {
    UpdateData();
}

if (isset($_POST['delete'])) {
    deleteRecord();
}

function textboxValue($value)
{

    $textbox = mysqli_real_escape_string($GLOBALS['conn'], trim($_POST[$value]));
    if (empty($textbox)) {
        return false;
    } else {
        return $textbox;
    }
}


// messages
function TextNode($classname, $msg)
{
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// get data from mysql database
function getData()
{

    $sql = "SELECT * FROM products";

    $result = mysqli_query($GLOBALS['conn'], $sql);

    if (!$result || mysqli_num_rows($result) > 0) {
        return $result;
    }
}

// update dat
function UpdateData()
{
    $ProductId = trim($_POST['ProductId']);
    $Name = trim($_POST['Name']);
    $SKU = trim($_POST['SKU']);
    $ProductCategory = trim($_POST['ProductCategory']);
    $Price = trim($_POST['Price']);
    $PictureURI = trim($_POST['PictureURI']);
    $StockAmount = trim($_POST['StockAmount']);
    $ProductDesc = trim($_POST['ProductDesc']);

    $Status = trim($_POST['Status']);
//    $date=date("Y-m-d H:i:s");

//    if ($itemname && $itemdescription && $itemprice && $itemamount && $pictureURL && $itemSku) {
        $sql = "
                    UPDATE products SET Name='$Name',SKU='$SKU',ProductCategory='$ProductCategory',Price='$Price',Status='$Status',PictureURI='$PictureURI',StockAmount='$StockAmount',ProductDesc='$ProductDesc' WHERE ProductId='$ProductId';                    
        ";

        if (mysqli_query($GLOBALS['conn'], $sql)) {
            TextNode("success", "Product Successfully Updated");
        } else {
            TextNode("error", "Unable to Update Product");
            echo mysqli_error($GLOBALS['conn']);
        }

//    } else {
//        TextNode("error", "Select Data Using Edit Icon");
//    }


}


function deleteRecord()
{
    $ProductId = trim($_POST['ProductId']);

    $sql = "DELETE FROM products WHERE ProductId = $ProductId";

    if (mysqli_query($GLOBALS['conn'], $sql)) {
        TextNode("success", "Product Deleted Successfully...!");
    } else {
        TextNode("error", "Unable to Delete Product...!");
//
//        echo "<script type='text/javascript'>alert('$requestID');</script>";
//        echo '<p>' . mysqli_error($GLOBALS['conn']) . '<br><br>Query:' . $sql . '</p>';
    }

}


function deleteBtn()
{
    $result = getData();
    $i = 0;
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $i++;
            if ($i > 3) {
                buttonElement("btn-deleteall", "btn btn-danger", "<i class='fas fa-trash'></i> Delete All", "deleteall", "");
                return;
            }
        }
    }
}


function deleteAll()
{
    $sql = "DELETE * FROM products";

    if (mysqli_query($GLOBALS['conn'], $sql)) {
        TextNode("success", "All Record deleted Successfully...!");
    } else {
        TextNode("error", "Something Went Wrong Record cannot deleted...!");
    }
}


// set id to textbox
function setID()
{
    $getid = getData();
    $id = 0;
    if ($getid) {
        while ($row = mysqli_fetch_assoc($getid)) {
            $id = $row['id'];
        }
    }
    return ($id + 1);
}








