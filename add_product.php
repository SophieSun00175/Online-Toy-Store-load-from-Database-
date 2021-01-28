<?php include "./db-connection/connection.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/general.css">

</head>

<body>
    <!--class="container-fluid-->
    <div class="myContainer">
        <div class="row filter">
            

            <?php include "./fetch-data/add_data.php";  ?>
            
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                <div class="row">
                    <!-- Button trigger modal -->
                   <div> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Upload new product
                    </button><br></div>

                    <!-- add product form, all fields required, price step is set -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Enter your prodcut details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="add_product.php" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Product ID:</label>
                                            <input type="text" class="form-control" name="productID" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Product name:</label>
                                            <input type="text" class="form-control" name="productName" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Upload your product image:</label>
                                            <input type="file" name="productimage" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Upload your product rating:</label>
                                            <input type="file" name="productRatingIcon" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Product price:</label>
                                            <input type="number" class="form-control" name="productPrice" step=".01" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Describe your product:</label>
                                            <textarea class="form-control"  rows="3" name="productDescription" ></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <input type="submit" action="add_product.php" class="btn btn-primary" name="upload" value="Upload">
                                        
                                    </div> 
                                   
                                </form>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        include "./fetch-data/get_data.php"; 
                        if (isset($feedback)) { //feedback declared in add_data.php
                            echo "<div><p><b>$feedback. </b></p></div>"; //print when successfully upload
                        }
                    ?>
                    <div class="add_products_prompt"><br><p >The following are the existing products in the database.<br>
                        If you need to add products, please click the above “Upload new product” button.<br>
                        -------------------------------------------------------------------------------------------------------------------------------------------------------</p></div>
                    </div>
                <div class="row productcontainer">
                    <?php 
                        // include "./fetch-data/get_data.php"; 
                        printHTML();
                    ?>

                </div>

            </div>
        </div>
    </div>

    <!-- <div class="card myfooter">
        <div class="card-header">
            ©2020 TOYFUN
        </div>
        <div class="card-body bg-light">
            <h5 class="card-title">Contact us</h5>
            <p class="card-text">520 Wonderfulland, Ottawa, ON A1B 2C3</p>
            <p class="card-text">613-613-6133</p>
            <a href="#" class="btn btn-primary"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="btn btn-primary"><i class="fab fa-twitter"></i></a>
        </div>
    </div> -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body></html>
