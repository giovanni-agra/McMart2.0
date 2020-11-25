


<!---PHP CHECK--->

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require('requires/SignupProcess.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="signup_styles.css">
</head>
<body>

<!-- REGISTER -->
<form action="signup.php" method="POST" onsubmit="return checked();" name="regform" id="regform">
    <div class="container">
        <!--  registration page  -->
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="firstname">Name:</label>
        <input type="text" id="Name" name="Name" class="form-control" required placeholder="Enter First name here" maxlength="40"
               value="<?php if (isset($_POST['Name'])) echo $_POST['Name'];?>">

        <label for="firstname">Username:</label>
        <input type="text" id="UserName" name="UserName" class="form-control" required placeholder="Enter Username here" maxlength="40"
               value="<?php if (isset($_POST['UserName'])) echo $_POST['UserName'];?>">

        <label for="email">Email:</label>
        <input type="email" id="email" class="form-control" placeholder="Enter email here" name="email" maxlength="60" required
               value="<?php if (isset($_POST['Email'])) echo $_POST['Email'];?>">

        <label for="Password1">Password:</label>
        <input type="password" id="Password1" class="form-control" required placeholder="Enter password here" name="Password1" minlength="8" maxlength="12"
               value="<?php if (isset($_POST['Password1'])) echo $_POST['Password1'];?>" >

        <label for="inputPassword2">Confirm Password:</label>
        <input type="password" id="Password2" class="form-control" required placeholder="Enter password again here" name="Password2" minlength="8" maxlength="12"
               value="<?php if (isset($_POST['Password2'])) echo $_POST['Password2'];?>">

        <div class="col-sm-12">
            <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary">submit</button>
        </div>
    </div>

</form>

<!---FOOTER BAR--->
<footer class="footer footer-expand-md footer-dark bg-dark">

</footer>

</body>
</html>