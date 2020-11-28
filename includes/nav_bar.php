<style>
    nav .navbar-nav li a{
        color: Black !important;
    }
    nav .navbar-nav li a:hover{
        color: dodgerblue !important;
    }




</style>

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/McMart2.0/index.php">McMart 2.0</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product Category</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/McMart2.0/products/food_index.php">Food and Drinks</a>
                        <a class="dropdown-item" href="/McMart2.0/products/books_index.php">Books</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/McMart2.0/products/medicine_index.php">Medicine</a>
                        <a class="dropdown-item" href="/McMart2.0/products/stationary_index.php">Stationary</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/McMart2.0/products/uniform_index.php">Uniform</a>
                        <a class="dropdown-item" href="/McMart2.0/products/others_index.php">Others</a>
                    </div>
                </li>
                </li>


                <?php if(session_status() == PHP_SESSION_NONE) {
                    session_start();
                }?>

                <?php if (isset($_SESSION['Loggedin']) ):  ?>

                    <?php  if ($_SESSION['Role'] == 'Worker') : ?>
                <li class="nav-item">
                    <a class="nav-link " href="/McMart2.0/requests/new_request.php">Create Request</a>
                </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/McMart2.0/requests/request_list.php">Request Lists</a>
                        </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="name" type="search" placeholder="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" name="submit" type="submit">Search</button>
            </form>
            <!--            <a href="admin_login.php"><button class="btn btn-outline-dark ml-5 " name="Login" type="login">Login</button></a>-->
            <a href="/McMart2.0/accounts/Logout.php"><button class="btn btn-outline-danger ml-1 " name="Logout" type="logout">Logout</button></a>
        </div>
        <p class="text-right pl-2 pt-2"><i>Welcome <?php echo$_SESSION['Name'] ?>!</i></p>
    </nav>
</div>

                    <?php endif;?>
                    <?php  if ($_SESSION['Role'] == 'Admin') : ?>
<!--                        <li class="nav-item">-->
<!--                             <a class="nav-link " href="/McMart2.0/requests/request_list.php">Request Lists</a>-->
<!--                        </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Requests</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/McMart2.0/requests/request_list.php">Requests List</a>
                                <a class="dropdown-item" href="/McMart2.0/requests/new_request.php">Create Requests</a>

                            </div>
                        <li class="nav-item">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/McMart2.0/accounts/manageAccounts.php">Manage</a>
                                <a class="dropdown-item" href="/McMart2.0/accounts/signup.php">Create</a>

                            </div>
                        </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="name" type="search" placeholder="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" name="submit" type="submit">Search</button>
            </form>
<!--            <a href="admin_login.php"><button class="btn btn-outline-dark ml-5 " name="Login" type="login">Login</button></a>-->
                        <a href="/McMart2.0/accounts/Logout.php"><button class="btn btn-outline-danger ml-1 " name="Logout" type="logout">Logout</button></a>
        </div>
                        <p class="text-right pl-2 pt-2"><i>Welcome <?php echo$_SESSION['Name'] ?>!</i></p>
    </nav>
</div>
                <?php endif;?>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link " href="/McMart2.0/requests/new_request.php">Create Request</a>
                    </li>

                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" name="name" type="search" placeholder="Search">
                            <button class="btn btn-outline-dark my-2 my-sm-0" name="submit" type="submit">Search</button>
                        </form>
                        <a href="/McMart2.0/admin_login.php"><button class="btn btn-outline-primary ml-1 " name="Login" type="login">Login</button></a>
            <!--            <a href="accounts/Logout.php"><button class="btn btn-outline-danger ml-1 " name="Logout" type="logout">Logout</button></a>-->
                    </div>
                </nav>
            </div>
                <?php endif;?>

<?php //print_r(session_id())?>