<?php


require_once("account_component.php");
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

//if (isset($_POST['deleteall'])) {
//    deleteAll();
//
//}





// messages
function TextNode($classname, $msg)
{
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// update dat
function UpdateData()
{
    $userID = trim($_POST['UserID']);
    $name = trim($_POST['Name']);
    $userName = trim($_POST['UserName']);
    $email = trim($_POST['Email']);
    $role = trim($_POST['Role']);


    if ($userID && $name && $userName && $email && $role) {
        $sql = "
                    UPDATE users SET Name = '$name',UserName = '$userName', Email = '$email', Role='$role'WHERE UserID='$userID';                    
        ";

        if (mysqli_query($GLOBALS['conn'], $sql)) {
            TextNode("success", "User Successfully Updated");
        } else {
            TextNode("error", "Unable to Update Users");
            echo mysqli_error($GLOBALS['conn']);
        }

    } else {
        TextNode("error", "insert Data");
    }


}


function deleteRecord()
{
    $userID = trim($_POST['UserID']);

    $sql = "DELETE FROM users WHERE UserID=$userID";

    if (mysqli_query($GLOBALS['conn'], $sql)) {
        TextNode("success", "Users Deleted Successfully...!");
    } else {
        TextNode("error", "Unable to Delete Users...!");
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








