<?php

function component($PictureURI, $Name, $Status, $Price){
    $element= "
    
    <div class=\"form-group col-md-4\">
                <div class=\"card btn-no-waves\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src=\"$PictureURI\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">$Name</h5>
                        <p class=\"card-text text-center\">$Status</p><br>
                        <p class=\"card-text text-center\">$Price</p>
                        <a href=\"#\" target=\"_blank\" class=\"stretched-link btn btn-primary\">Go somewhere</a>
                    </div>
                </div>
            </div>
    
    ";
    echo $element;
}
?>