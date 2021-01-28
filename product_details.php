<?php include "./db-connection/connection.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/general.css">
</head>

<body>
    <!--              fluid occupies 100% width-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <img src="./images/logo.png" alt="" width="50%" height="auto">
            </div>
            <div class="menu col-xs-12 col-sm-12 col-md-10 col-lg-10">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="./index.php">Welcome <span
                                        class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Product
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Lego toys</a>
                                    <a class="dropdown-item" href="#">Nerf Guns</a>
                                    <a class="dropdown-item" href="#">Wooden toys</a>
                                    <a class="dropdown-item" href="#">Educational toys</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign In/Register
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Sign in</a>
                                    <a class="dropdown-item" href="#">Register</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">View Cart</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--class row 1-->
    </div>
    <!--class="container-fluid-->

    <!--Slideshow(Carousel)-->
    <div class="myContainer">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-6">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <?php
                                include "./fetch-data/get_data.php"; 
                                
                        
                                if(isset($_GET["id"])){
                                  
                                    $id = $_GET["id"] - 1;
                                    echo "<img src='./images/" . $products[$id]["prod_image"] . "' class='d-block w-100' alt='" 
                                         . $products[$id]["prod_name"] . "'>";
                                }
                                
                            ?>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>

            </div>
            <!--Purchasing options-->
            <!-- part3 start -->
            <!-- load the product details from database -->
            <div class="col-md-4" style="background-color:rgb(250, 250, 250);">
                <div class="product-details-product-name">
                    <h1 id="title">
                    <?php echo $products[$id]["prod_name"]; ?>
                    </h1>
                </div>
                <div class="stars">
                <?php echo "<img id='ratingImg' src='images/" . $products[$id]["prod_rating_icon"] . "' alt=''>" ?>
                </div>
                <p>description：<span id="description"><?php echo $products[$id]["prod_description"]; ?></span></p>

                <lable style=font-size:20px;>Unit Price:</lable>
                <div class="product-details-price">
                    <p><span id="price"><?php echo $products[$id]["prod_price"]; ?></span></p>
                </div>
                <lable style=font-size:20px;color:crimson>Total Price:</lable>
                <div class="product-details-price">
                    <input type="text" id="totalPrice" style="border:0px;background:none;color:crimson">
                </div>

                <div class="product-details-inventory">
                    Available now
                </div>
                </br>
                </br>

                <div class="Purchase-quantity-button-group">
                    <div class="Purchase-quantity-button-minus">
                        <input type="button" id="buttonMinus" value="-">
                    </div>
                    <div class="Purchase-quantity-button-select">
                        <input type="text" id="textQuantity" value="1">

                    </div>
                    <div class="Purchase-quantity-button-plus">
                        <input type="button" id="buttonPlus" value="+">
                    </div>
                </div>
                <!--nextline-->
                </br></br></br>

                <div class="Purchase-button-add-to-bag">
                    <input type="button" value="Add to bag">
                </div>
                </br>
                <div class="Purchase-button-add-to-wishilist">
                    <a href="javascript:void(0);" οnclick="js_method()">
                        ❤️ Add to wishlist
                    </a>
                </div>
                <hr size=1px>
                <div class="product-details-check-stock">
                    <a href="javascript:void(0);" οnclick="js_method()">
                        Check Store Stock
                    </a>
                </div>
                <hr size=1px>
                <div class="product-details-shop-more">
                    Shop more like this:
                </div>
                <div class="product-details-shop-more-list">
                    <a href="javascript:void(0);" οnclick="js_method()">
                        Creator Expert
                    </a>
                    <a href="javascript:void(0);" οnclick="js_method()">
                        Instructions PLUS
                    </a>
                    <a href="javascript:void(0);" οnclick="js_method()">
                        Buildings
                    </a>
                </div>
            </div>

        </div>
        <div class="col-md-1">

        </div>
    </div><br><br>

    <!--footer-->
    <div class="card myfooter">
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
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- <script src="./js/products.js"></script>
    <script src="./js/shoppingCart.js"></script> -->
    <script type="text/javascript">
    
        document.querySelector("#buttonMinus").setAttribute("disabled", "disabled");
        document.querySelector("#buttonPlus").addEventListener("click", plusShop);
        document.querySelector("#buttonMinus").addEventListener("click", minusShop);

        var totalPrice = 0;
        var quantity = 1;
        //Set the initial value
        var unitPrice = totalPrice = document.getElementById("price").innerHTML;
        document.getElementById("totalPrice").value = totalPrice;

        function totalPriceFun() {
            unitPrice = document.getElementById("price").innerHTML;
            console.log(unitPrice);
            getQuantity = document.getElementById("textQuantity").value;
            totalPrice = unitPrice * getQuantity;
            document.getElementById("totalPrice").value = totalPrice.toFixed(2);
        }

        function plusShop() {
            quantity++;
            document.getElementById("textQuantity").value = quantity;
            if (quantity > 1) {
                document.querySelector("#buttonMinus").removeAttribute("disabled");
            }

            totalPriceFun();
        }

        function minusShop() {
            quantity--;
            document.getElementById("textQuantity").value = quantity;
            if (quantity == 1) {
                document.querySelector("#buttonMinus").setAttribute("disabled", "disabled")
            }
            totalPriceFun();
        }

    </script>
</body>

</html>