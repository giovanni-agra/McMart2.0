<?php


require_once("request_component.php");
require("../includes/db.inc.php");


// create button click
if (isset($_POST['create'])) {
//    echo "<script>console.log('point')</script>";
    createData();
}

if (isset($_POST['update'])) {
    UpdateData();
}

if (isset($_POST['delete'])) {
    deleteRecord();
}

if (isset($_POST['deleteall'])) {
    deleteAll();

}

function createData()
{

//    $itemid = textboxValue("item_id");
    $itemname = textboxValue("item_name");
    $itemdescription = textboxValue("item_description");
    $itemprice = textboxValue("item_price");
    $itemamount = textboxValue("item_amount");
    $itemSku = textboxValue('item_sku');
    $pictureURL = textboxValue("pictureUrl");
    $datenow = time();
    $status =  textboxValue("item_status");

    if ($itemname && $itemdescription && $itemprice && $itemamount && $itemSku && $pictureURL && $status) {

        $sql = "INSERT INTO products (Name, ProductDesc, Price, StockAmount,Status,PictureURI,SKU) 
                        VALUES ('$itemname','$itemdescription','$itemprice','$itemamount','$status','$pictureURL','$itemSku' )";

        if (mysqli_query($GLOBALS['conn'], $sql)) {
            TextNode("success", "Record Successfully Inserted...!");
        } else {
            echo "Error From Create Data";
        }

    } else {
        TextNode("error", "Provide Data in the Textbox");
    }
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
    $itemid = textboxValue("item_id");
    $itemname = textboxValue("item_name");
    $itemdescription = textboxValue("item_description");
    $itemprice = textboxValue("item_price");
    $itemamount = textboxValue("item_amount");
    $itemSku = textboxValue('item_sku');
    $pictureURL = textboxValue("pictureUrl");
    $datenow = time();
    $status =  textboxValue("item_status");

    if ($itemname && $itemdescription && $itemprice && $itemamount && $pictureURL && $itemSku) {
        $sql = "
                    UPDATE products SET Name='$itemname', ProductDesc = '$itemdescription',Price= '$itemprice',SKU='$itemSku',StockAMount='$itemamount',PictureURI = '$pictureURL' WHERE ProductId='$itemid';                    
        ";

        if (mysqli_query($GLOBALS['conn'], $sql)) {
            TextNode("success", "Data Successfully Updated");
        } else {
            TextNode("error", "Enable to Update Data");
        }

    } else {
        TextNode("error", "Select Data Using Edit Icon");
    }


}


function deleteRecord()
{
    $itemid = (int)textboxValue("item_id");

    $sql = "DELETE FROM products WHERE ProductId=$itemid";

    if (mysqli_query($GLOBALS['conn'], $sql)) {
        TextNode("success", "Record Deleted Successfully...!");
    } else {
        TextNode("error", "Enable to Delete Record...!");
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








