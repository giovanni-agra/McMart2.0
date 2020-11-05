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
                while ($row = $result->fetch_assoc()) {
                        $hashedpassowrd = $row['Password'];
                        $role = $row['Role'];
                }

                if (password_verify($password,$hashedpassowrd)) {
                    if($role == 'Student') {

                            session_start();
                            $_SESSION['Role'] = 'Student';
                            header('location:index.php');
                    }
                    if ($role == 'Worker'){

                        session_start();
                        $_SESSION['Role'] = 'Worker';
                        header('location:index.php');
                    }
                     if ($role ==  'Admin'){
                        session_start();
                        $_SESSION['Role'] = 'Admin';
                        header('location:index.php');
                     }
                }else{

                    echo "<P> INVALID PASSWORD </P>";
                }





            }else {
                echo "<p>User not found.</p>";
            }
    }

?>

<form method="POST">
    Username:<br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <input type="submit">

</form>
<h2> No Account?</h2>
<a href="signup.php">Signup</a>