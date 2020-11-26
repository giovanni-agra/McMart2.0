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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/McMart2.0/category1_index.php">Category1</a>
                        <a class="dropdown-item" href="contactList.php">Category2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="newAsset.php">Category3</a>
                        <a class="dropdown-item" href="assetList.php">Category4</a>
                    </div>
                </li>
                </li><li class="nav-item">
                    <a class="nav-link " href="/McMart2.0/requests/request_list.php">Request</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" name="name" type="search" placeholder="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" name="submit" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>

