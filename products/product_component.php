<?php

function component($ProductImg, $ProductName, $ProductStatus, $ProductPrice){
    $element= "
    
    <div class=\"form-group col-md-4\">
                <div class=\"card btn-no-waves\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src=\"$ProductImg\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">$ProductName</h5>
                        <p class=\"card-text text-center\">$ProductStatus</p><br>
                        <p class=\"card-text text-center\">$ProductPrice</p>
                        <a href=\"#\" target=\"_blank\" class=\"stretched-link btn btn-primary\">Go somewhere</a>
                    </div>
                </div>
            </div>
    
    ";
    echo $element;
}
?>