<?php

// This script is a query that insert a record in the user table
$errors = array();// error will be stored in an array
// checking the  first name
$Name = trim($_POST['Name']);
if (empty($Name)){
    $errors[] = "You forgot to enter your name";
}
$UserName = trim($_POST['UserName']);
if (empty($Name)){
    $errors[] = "You forgot to enter your username";
}
// check for email
$email = trim($_POST['email']);
if (!empty($email)) {
    require('../includes/db.inc.php');

    $stmt = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'" ) or exit(mysqli_error($conn));
    if (mysqli_num_rows($stmt)>0){
        $errors[] = "Email already exits";}
} elseif (empty($email)){
    $errors[]= "Hello! You forgot to insert email address";
}
// check for password
$password1 = trim($_POST['Password1']);
$password2 = trim($_POST['Password2']);
if(!empty($password1))
{
    if($password1 !== $password2)
    {// cehcking 2 for password
        $errors[]= "YOUR PASSWORD DID NOT MATCH";
    }
}else
{
    $errors[]= "You forgot to insert password";
}

if (empty($errors)) { // everthign is oke
    try {
        //puting the data into database
        //convert password into hash
        $defaultRole = "Worker";
        $hashed_password = password_hash($password1, PASSWORD_DEFAULT);//converting the password to hash
        require('../includes/db.inc.php'); //caling db.inc to connect to db
        $query = "INSERT INTO users ( Name, UserName, Email, Password, Role)"; // querying sql function
        $query .= "VALUES( ?, ?, ?, ?, ? )"; // puting sql values to question marn and registration date to current time
        $q = mysqli_stmt_init($conn); //to ensure only text
        mysqli_stmt_prepare($q, $query); //bind field to sql statement
        mysqli_stmt_bind_param($q, "sssss", $Name, $UserName, $email, $hashed_password,$defaultRole);
        mysqli_stmt_execute($q);

        if (mysqli_stmt_affected_rows($q) == 1) {
            header("LOCATION: ../accounts/manageAccounts.php"); // to be made
            exit();
        } else {
            $errorstring = "<p class ='text-center col-sm-8 mx-auto' style='color:#ff0000'>";
            $errorstring .= "System Error<br/>you could not be registred due ";
            $errorstring .= "to a system error. we apologize for any invonvenience.</p>";
            echo " <p class=' text-center col-sm-2 mx-auto' style='color:red'>$errorstring</p>";
            echo '<p>' . mysqli_error($conn) . '<br><br>Query:' . $query . '</p>';
            mysqli_close($conn);
            echo '<footer class="jumbotron text center col-sm-12 mx-auto" style="...">';
//            include("footer.php");
            echo '</footer>';
            exit();
        }

    } catch (Exception $e) {
        print "The system is buys please try later";
    } catch (Error $e) {
        print "The system is busy";
    }
}else{
    $errorstring = "Error! <br> The following errors occurred:<br>";
    foreach ($errors as $msg) {
        $errorstring .= "-$msg <br>\n";
    }
    $errorstring .= "please try again.<br>";
    echo "<p class='text-center col-sm-2 mx-auto' style='color:red'>$errorstring</p>";
}

