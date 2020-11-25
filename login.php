
<?php
require('includes/db.inc.php');
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //        echo $hashedPassword;
    $sUser = mysqli_real_escape_string($conn, $username);
    //        $sPass = mysqli_real_escape_string($conn, $hashedPassword);
    // For Security
    $query = "SELECT * From users where UserName='$sUser'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $hashedpassowrd = '';
        $role = '';
        $name='';
        while ($row = $result->fetch_assoc()) {
            $hashedpassowrd = $row['Password'];
            $role = $row['Role'];
            $name = $row['Name'];
        }

        if (password_verify($password,$hashedpassowrd)) {
            if($role == 'Student') {

                session_start();
                $_SESSION['Role'] = 'Student';
                $_SESSION['Name'] = $name;
                header('location:pages/index.php');
            }
            if ($role == 'Worker'){

                session_start();
                $_SESSION['Role'] = 'Worker';
                $_SESSION['Name'] = $name;
                header('location:pages/index.php');
            }
            if ($role ==  'Admin'){
                session_start();
                $_SESSION['Role'] = 'Admin';
                $_SESSION['Name'] = $name;
                header('location:pages/index.php');
            }
        }else{

            echo "<P> INVALID PASSWORD </P>";
        }





    }else {
        echo "<p>User not found.</p>";
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login MCMart2.0</title>
    <link rel="stylesheet" href="login_styles.css">
</head>
<body>

<!-- Modal Content -->
<div class="modal-content aniumate">
<form method="POST">
    <div class="imgcontainer">
        <img src="assets/mcmart2.0logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="EnterPassword" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>
    <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="sign-up"><a
                    href="signup.php">New User?</a></button>
        <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
</div>



</body>
</html>
