<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- styles -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet">-->
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/flexslider.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/color/default.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700"
          rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cusstyle.css">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<div id="ItemOrder">
    <div>
        <div class="OptionHeader">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <h2>Item List</h2>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav">
                        </div>
                    </div>
                    <div>
                        <button class="btn" type="button"><i class='fas fa-filter'
                                                             style='font-size:24px;color:white;margin-right: 20px;'>Filter</i>
                        </button>
                    </div>
                    <div class="navbar-nav">

                        <form class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
            </nav>
        </div>
    </div>
    <div class="d-flex table-data">
        <table class="table table-striped table-dark" style="text-align: center; ">
            <thead class="thead-dark">
            <tr>
                <th>Picture</th>
                <th>Item Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
            <tr style="height: 60px;">
                <td>
                    <button class="popup" onclick="showDetail()"><img
                                src="https://i2.wp.com/www.charitycomms.org.uk/wp-content/uploads/2019/02/placeholder-image-square.jpg?resize=400%2C300&ssl=1"
                                alt="" style="width:50px;height:50px;"></button>
                </td>
                <td>Pen</td>
                <td>Quantum pen 0.5</td>
                <td>60 baht</td>
                <td>InStock</td>
            </tr>
            <tr style="height: 60px; ">
                <td>
                    <button><img
                                src="https://i2.wp.com/www.charitycomms.org.uk/wp-content/uploads/2019/02/placeholder-image-square.jpg?resize=400%2C300&ssl=1"
                                alt="" style="width:50px;height:50px;"></button>
                </td>
                <td>Pen</td>
                <td>Quantum pen 0.5</td>
                <td>60 baht</td>
                <td>InStock</td>
            </tr>
            <tr style="height: 60px; text-align:center">
                <td>
                    <button><img
                                src="https://i2.wp.com/www.charitycomms.org.uk/wp-content/uploads/2019/02/placeholder-image-square.jpg?resize=400%2C300&ssl=1"
                                alt="" style="width:50px;height:50px;"/></button>
                </td>
                <td>Pen</td>
                <td>Quantum pen 0.5</td>
                <td>60 baht</td>
                <td>InStock</td>
            </tr>
            </thead>
            <tbody >

            </tbody>
        </table>
    </div>

</div>

<!--<div class="col-3 card">
    <img src="https://i2.wp.com/www.charitycomms.org.uk/wp-content/uploads/2019/02/placeholder-image-square.jpg?resize=400%2C300&ssl=1" alt="Denim Jeans" style="width:100%">
    <h1>Item Name</h1>
    <p class="price">Price</p>
    <p>Some text about the item. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
    <p><button>InStock</button></p>
</div>-->




</body>


</html>