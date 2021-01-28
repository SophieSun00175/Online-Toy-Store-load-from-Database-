<?php

// if upload button is pressed
if(isset($_POST['upload'])) {


    // get all the submitted data from the form
    $image = $_FILES['productimage']['name'];
    $prod_id = $_POST['productID'];
    $prod_name = $_POST['productName'];
    $prod_rating_icon =  $_FILES['productRatingIcon']['name'];
    $prod_price = $_POST['productPrice'];
    $prod_description = $_POST['productDescription'];

    $sql = "INSERT INTO products (prod_id, prod_name, prod_image, prod_rating_icon, prod_price, prod_description) 
            VALUES ('$prod_id','$prod_name', '$image', '$prod_rating_icon', '$prod_price', '$prod_description')";

    $prepareSql = $pdoconnect->prepare($sql);
    $executeSql = $prepareSql->execute();

    //move the file(images) from the temporary file to the file to be loaded
    if ($executeSql) {
        move_uploaded_file($_FILES['productimage']['tmp_name'], './images/'.$image);
        move_uploaded_file($_FILES['productRatingIcon']['tmp_name'], './images/'.$prod_rating_icon);
    }

    //used on add_product.php when all input areas filled and sumbitted to echo seccessful upload info on the webpage
    if (!empty($image) && !empty($prod_id) && !empty($prod_name) && !empty($prod_rating_icon) && !empty($prod_price) && !empty($prod_description)) {
        $feedback = "The information of \"$prod_name\" has been successfully uploaded!";
    }
    
}


?>