<?php

function component($PictureURI, $Name, $Status, $Price,$ProducDesc){

    $badge = null;
    if($Status == 'In Stock'){
        $badge = "<span class=\"badge badge-success\">$Status</span>";
    }else{
        $badge = "<span class=\"badge badge-warning\">$Status</span>";
    }
    $element= "
    
    <div class=\"form-group col-md-4\">
                <div class=\"card btn-no-waves\" style=\"width: 18rem;\">
                    <img class=\"card-img-top\" src=\"$PictureURI\" alt=\"Card image cap\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">$Name $badge</h5>
                                
                        <p class=\"card-text text-center\">฿$Price</p>
                        <p class=\"card-text text-center\">$ProducDesc</p>
                       
                    </div>
                </div>
            </div>  
    
    ";
    echo $element;
}
?>