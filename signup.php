


<!---PHP CHECK--->

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require('requires/SignupProcess.php');
}
?>


<!-- REGISTER -->
<div class="container mb-5 mt-5 mx-auto" style="width: 1000px" >
    <form action="signup.php" method="POST" onsubmit="return checked();" name="regform" id="regform">
        <div class="row ">
            <!--  registration page  -->
            <div class="container mx-auto" style="width: 750px" ><!--container for the form-->
                <h3 class="mx-auto">Register here</h3>
                <div class="row form-group mx-auto " ><!--row for the form name-->
                    <div class="col col-lg-2 mx-auto"><!--column for label-->
                        <label for="firstname">Name:</label>
                    </div>
                    <div class="col-md-auto mx-auto"><!--column for input-->
                        <input type="text" id="Name" name="Name" class="form-control" required placeholder="Enter First name here" maxlength="40"
                               value="<?php if (isset($_POST['Name'])) echo $_POST['Name'];?>">
                    </div>
                </div>
                <div class="row form-group mx-auto " ><!--row for the form name-->
                    <div class="col col-lg-2 mx-auto"><!--column for label-->
                        <label for="firstname">UserName:</label>
                    </div>
                    <div class="col-md-auto mx-auto"><!--column for input-->
                        <input type="text" id="UserName" name="UserName" class="form-control" required placeholder="Enter First name here" maxlength="40"
                               value="<?php if (isset($_POST['UserName'])) echo $_POST['UserName'];?>">
                    </div>
                </div>
                <div class="row form-group mx-auto"><!--row for the form email-->
                    <div class="col col-lg-2 mx-auto"><!--column for label-->
                        <label for="email">Email:</label>
                    </div>
                    <div class="col-md-auto mx-auto"><!--column for input-->

                        <input type="email" id="email" class="form-control" placeholder="Enter email here" name="email" maxlength="60"
                               value="<?php if (isset($_POST['Email'])) echo $_POST['Email'];?>">
                    </div>
                </div>
                <div class="row form-group mx-auto"><!--row for the form password-->
                    <div class="col col-lg-2 mx-auto"><!--column for label-->
                        <label for="Password1">Password:</label>
                    </div>
                    <div class="col-md-auto mx-auto"><!--column for input-->
                        <input type="password" id="Password1" class="form-control" required placeholder="Enter password here" name="Password1" minlength="8" maxlength="12"
                               value="<?php if (isset($_POST['Password1'])) echo $_POST['Password1'];?>" >
                    </div>
                </div>


                <div class="row form-group mx-auto"><!--row for the form password-->
                    <div class="col col-lg-2 mx-auto"><!--column for label-->
                        <label for="inputPassword2">Confirm Password:</label>
                    </div>
                    <div class="col-md-auto mx-auto"><!--column for input-->
                        <input type="password" id="Password2" class="form-control" required placeholder="Enter password again here" name="Password2" minlength="8" maxlength="12"
                               value="<?php if (isset($_POST['Password2'])) echo $_POST['Password2'];?>">
                    </div>
                </div>
                <div class="form-group row mx-auto">
                    <div class="col-sm-12">
                        <button id="submit" type="submit" value="submit" name="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </div>

        </div>


</div>

</form>
</div>


<!---FOOTER BAR--->
<footer class="footer footer-expand-md footer-dark bg-dark">

</footer>
</body>
</html>