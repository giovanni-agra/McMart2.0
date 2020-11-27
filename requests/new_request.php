<?php
//
require_once("../includes/db.inc.php");
//require ("requires/request_operation.php");
//if(isset($_POST['delete'])){
//    global $a ;
//    $a = isset($_POST['RequestsID']) ;
//    $sql = "DELETE FROM requests WHERE RequestID='$a'";
//    if(mysqli_query($conn,$sql)){
//        $message = "Requests With ID: $a  Deleted";
//        echo "<script type='text/javascript'>alert('$message');</script>";
//        echo "<script type='text/javascript'> document.location = 'request_list.php'; </script>";
//        exit();
//    }else{
//        $message = "Requests Failed to be Deleted.Please Contact Administrator";
//        echo "<script type='text/javascript'>alert('$message');</script>";
////        echo '<p>' . mysqli_error($conn) . '<br><br>Query:' . $sql . '</p>';
//        echo "<script type='text/javascript'> document.location = 'request_list.php'; </script>";
//        mysqli_close($conn);
//        exit();
//    }
//}
//?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

    <style>
        .btnLogin {
            padding: 13px;
            background-color: #5d9cec;
            color: #f5f7fa;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
            border: #5791da 1px solid;
            font-size: 1.1em;
        }

        .demo-input-box {
            padding: 13px;
            border: #CCC 1px solid;
            border-radius: 4px;
            width: 100%;
        }

    </style>

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">

        <?php include('../includes/nav_bar.php'); ?>

    </div>
</nav>


<br>
        <h2 class="text-center">NEW ITEM REQUEST</h2>
        <br>
        <br>

        <div class="container mb-5 justify-content-center">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                require('requires/process_new_request.php');
            }
            ?>

            <form action="new_request.php" id="regform" method="POST" name="regform"  enctype="multipart/form-data" onsubmit="return checked();">
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="UserRequestName">User Request Name: </label>
                            <input type="text" class="demo-input-box" name="UserRequestName" id="UserRequestName" placeholder="Type Your Name" required
                                    value="<?php if(isset($_POST['UserRequestName'])) echo $_POST['UserRequestName']; ?>" >
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="UserRequestIDNumber">User Request ID Number: </label>
                            <input type="text" class="demo-input-box" name="UserRequestIDNumber" id="UserRequestIDNumber" placeholder="Type Your Student ID Number"
                                    value="<?php if(isset($_POST['UserRequestIDNumber'])) echo $_POST['UserRequestIDNumber']; ?>" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="ItemName">Name of the Item: </label>
                            <input type="text" class="demo-input-box" name="ItemName" id="ItemName" placeholder="Name of the Item"
                                    value="<?php if(isset($_POST['ItemName'])) echo $_POST['ItemName']; ?>" width="276" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="ItemName">Item Quantity: </label>
                            <input type="number" class="demo-input-box" name="ItemQuantity" id="ItemQuantity" placeholder="Quantity of the Item"
                                   value="<?php if(isset($_POST['ItemQuantity'])) echo $_POST['ItemQuantity']; ?>" width="276" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="text">Product Category: </label>
                            <select id="ProductCategory" name="ProductCategory" class="form-control">
                                <option value="Category1">Category 1</option>
                                <option value="Category2">Category 2</option>
                                <option value="Category3">Category 3</option>
                                <?php if (isset($_POST['ProductCategory'])) echo $_POST['ProductCategory'];
                                ?>
                            </select>

                        </div>
                    </div>
                    <hr>
                    <div class="row form-group">
                        <div class="form-group col-md-3">
                            <label for="ItemDescription">Item Description: </label>
                        </div>
                        
                            <textarea class="form-control rounded-0" name="ItemDescription" id="ItemDescription" rows="4" value="<?php if(isset($_POST['ItemDescription'])) echo $_POST['ItemDescription']; ?>"> </textarea>
                        
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                    <hr>    
                

            </form>

        </div>

        <nav class="static-bottom">
            <div class="container">
                <?php include('../includes/footer.php'); ?>
            </div>
        </nav>
    </body>

</html>