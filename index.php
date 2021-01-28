<?php include "./db-connection/connection.php"; ?>
<!doctype php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home page</title>
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
                                <a class="nav-link dropdown-toggle" href="./search_result.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <!-- part 2 search bar and link to search_result page -->
                        <form class="form-inline my-2 my-lg-0 searching" action="search_result.php" method="GET">
                            <input id="search" class="form-control mr-sm-2" type="textbox" placeholder="Search"
                                aria-label="Search" name="searchtext">
                              
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
                        </form>
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
            <div class="col-md-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" class="carousel-inner-home-page">
                        <div class="carousel-item active">
                            <img src="./images/nerf-banner-1920x600px.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="font-size: 30px; text-shadow: 0 0 3px #FF0000, 0 0 3px #6bf403;">Top 1</h5>
                                <p style="font-size: 20px;text-shadow: 0 0 2px #FF0000, 0 0 2px #6bf403;">Featured
                                    products</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/build-banner.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="font-size: 30px;text-shadow: 0 0 3px #FF0000, 0 0 3px #6bf403;">Top 2</h5>
                                <p style="font-size: 20px;text-shadow: 0 0 2px #FF0000, 0 0 2px #6bf403;">Featured
                                    products</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/60265-Home-202006-Hero-Standard-Large.jpeg" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="font-size: 30px;text-shadow: 0 0 3px #FF0000, 0 0 3px #6bf403;">Top 3</h5>
                                <p style="font-size: 20px;text-shadow: 0 0 2px #FF0000, 0 0 2px #6bf403;">Featured
                                    products</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/Advent-Home-202009-Hero-Standard-Large.jpeg" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 style="font-size: 30px; text-shadow: 0 0 3px #FF0000, 0 0 3px #6bf403;">Top 4</h5>
                                <p style="font-size: 20px;text-shadow: 0 0 2px #FF0000, 0 0 2px #6bf403;">Featured
                                    products</p>
                            </div>
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
        </div>
    </div>
    </br></br>

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

    <!-- part 2 JavaScript -->
    <!-- <script src="./js/products.js"></script>
    <script src="./js/search.js"></script>
    <script src="./js/shoppingCart.js"></script> -->

    <!-- part 3 JavaScript -->
    <script src="./js/script.js"></script>

</body>

</php>