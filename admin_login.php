
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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
    <div class="container mb-5 justify-content-center text-center">
    <img src="assets/images/mcmart2.0logo.png" class="img-fluid" alt="Responsive image">
            <div class="login-form">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <h2 class="text-center">SIGN IN</h2>       
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">SIGN IN</button>
                        </div>
                    </form>
            </div>      
            <div class="login-form">
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Warning!</h4><hr>
                        <p>If you are not an Admin,<br>Return to the Home Page</p>
                    </div>
                    <a href="#" class="btn btn-primary btn-block" role="button" aria-pressed="true">Home Page</a>  
            </div>      
    </div>
</body>
</html>
