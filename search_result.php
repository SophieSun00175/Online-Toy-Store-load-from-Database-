<?php include "./db-connection/connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search Result</title>
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
                                    <a class="dropdown-item" href="add_product.php">Add Product</a>
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
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" action="search_result.php" method="GET"
                                id="searchbar" style="width: 400px" aria-label="Search" name="searchtext">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <!--class row 1-->
    </div>
    <!--class="container-fluid-->
    <div class="myContainer">
        <div class="row filter">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Sort by
                    </button>
                    <div class="dropdown-menu sort" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Price low to high</a>
                        <a class="dropdown-item" href="#">Price high to low</a>
                    </div>
                </div><br><br>
                <h4>Filter</h4><br>
                <h5>Price</h5>
                <div class="form-check priceCheck">
                    <input class="form-check-input" type="checkbox" value="" rel="0-19" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        $ 0 - 19
                    </label>
                </div>
                <div class="form-check priceCheck">
                    <input class="form-check-input" type="checkbox" value="" rel="20-39" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        $ 20 - 39
                    </label>
                </div>
                <div class="form-check priceCheck">
                    <input class="form-check-input" type="checkbox" value="" rel="40-59" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">
                        $ 40 - 59
                    </label>
                </div>
                <div class="form-check priceCheck">
                    <input class="form-check-input" type="checkbox" value="" rel="60+" id="defaultCheck4">
                    <label class="form-check-label" for="defaultCheck1">
                        $ 60 or more
                    </label>
                </div><br>
                <h5>Rating</h5>
                <div class="form-check ratingCheck">
                    <input class="form-check-input" type="checkbox" value="" rel="5 stars" id="defaultCheck5">
                    <label class="form-check-label" for="defaultCheck1">
                        5 stars
                    </label>
                </div>
                <div class="form-check ratingCheck">
                    <input class="form-check-input" type="checkbox" value="" rel="4 stars" id="defaultCheck6">
                    <label class="form-check-label" for="defaultCheck2">
                        4 stars
                    </label>
                </div>
                <div class="form-check ratingCheck">
                    <input class="form-check-input" type="checkbox" value="" rel="3 stars" id="defaultCheck7">
                    <label class="form-check-label" for="defaultCheck3">
                        3 stars
                    </label>
                </div>
                <div class="form-check ratingCheck">
                    <input class="form-check-input" type="checkbox" value="" rel="3 stars" id="defaultCheck8">
                    <label class="form-check-label" for="defaultCheck3">
                        2 stars
                    </label>
                </div>
                <div class="form-check ratingCheck">
                    <input class="form-check-input" type="checkbox" value="" rel="3 stars" id="defaultCheck9">
                    <label class="form-check-label" for="defaultCheck3">
                        1 star
                    </label>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                <div class="row productcontainer">
                
                <!-- part3  products from mysql -->
                <?php 
                        include "./fetch-data/get_data.php"; 
                        printHTML();
                    ?>

                </div>
            </div>
        </div>
    </div>

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





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
       <script type="text/javascript">
         // pass a PHP array to JavaScript by using JSON
         var products = <?php echo json_encode($products); ?>;
    </script>
     <script src="./js/script.js"></script>
   <!-- <script src="./js/products.js"></script>
   <script src="./js/search.js"></script>
    <script src="./js/shoppingCart.js"></script> -->
</body>

</html>