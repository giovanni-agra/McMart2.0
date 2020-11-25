<?php


require_once("component.php");
require("../includes/db.inc.php");



// create button click
if (isset($_POST['create'])) {
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

//function createData()
//{
//
////    $itemid = textboxValue("item_id");
//    $itemname = textboxValue("item_name");
//    $itemdescription = textboxValue("item_description");
//    $itemprice = textboxValue("item_price");
//    $itemamount = textboxValue("item_amount");
//    $itemSku = textboxValue('item_sku');
//    $pictureURL = textboxValue("pictureUrl");
//    $datenow = time();
//    $status =  textboxValue("item_status");
//
//    if ($itemname && $itemdescription && $itemprice && $itemamount) {
//
//        $sql = "INSERT INTO products (Name, ProductDesc, Price, StockAmount,Status,PictureURI,SKU)
//                        VALUES ('$itemname','$itemdescription','$itemprice','$itemamount','$status','$pictureURL','$itemSku' )";
//
//        if (mysqli_query($GLOBALS['conn'], $sql)) {
//            TextNode("success", "Record Successfully Inserted...!");
//        } else {
//            echo "Error From Create Data";
//        }
//
//    } else {
//        TextNode("error", "Provide Data in the Textbox");
//    }
//}

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

    $sql = "SELECT * FROM users";

    $result = mysqli_query($GLOBALS['conn'], $sql);

    if (!$result || mysqli_num_rows($result) > 0) {
        return $result;
    }
}

// update dat
function UpdateData()
{
    $userId = textboxValue("userId");
    $Name = textboxValue("name");
    $username = textboxValue("username");
    $email = textboxValue("email");
    $role = textboxValue("role");


    if ($userId && $Name && $username && $email && $role) {
        $sql = "
                    UPDATE users SET Name='$Name', UserName = '$username',Email= '$email',Role='$role' WHERE UserID='$userId';                    
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
    $userid = (int)textboxValue("userId");

    $sql = "DELETE FROM user WHERE UserID= $userid";

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
        Createdb();
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
            $id = $row['UserID'];
        }
    }
    return ($id + 1);
}








