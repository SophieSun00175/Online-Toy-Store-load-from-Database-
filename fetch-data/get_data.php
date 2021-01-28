<?php
// Create the database query:
$allQuery = "SELECT * FROM products";

// Performing query against the database:
$data = $pdoconnect->query($allQuery);

// Have an empty array ready to be populated with record-sets from  the $data:
$products = [];

//Loop throught the $resource and extract record sets:
foreach ($data as $row) {
    array_push($products, $row);
}

//template
function generateProductHtml($product)
{
    return "<div class='col-xs-12 col-sm-12 col-md-4 col-lg-4 imgbox'>
            <div class='card'>
            <a href='./product_details.php?id=" . $product["prod_id"] . "'>
                <img src='images/" . $product["prod_image"] . "' class='card-img-top' alt='" . $product["prod_name"] . "'>
                </a>
                <p>" . $product["prod_name"] . "</p>
                <div class='card-body'> 
                    <p class='card-text'>" . $product["prod_price"] . "</p>
                    <img src='images/" . $product["prod_rating_icon"] . "' class='card-img-top ratingstar' alt=''> 
                </div>
            </div>
        </div>";
}

// PRINT HTML:
// Create function printHTML.
function printHTML()
{
    global $products;
    $html = NULL;

    //when 'search' is invoked, look for the search keyword
    if (isset($_GET["search"])) {
        $searchText = $_GET["searchtext"];
        $countResult =0; //set countor to see how many items meet the search keyword
        if($searchText) {   //get the keyword and search according to the keyword input
            for ($i = 0; $i < sizeof($products); $i++) {
                if (stripos($products[$i]["prod_name"], $searchText) !== false) {
                    $countResult++;
                    $html .= generateProductHtml($products[$i]);
                }
            }
            echo "<div class='col-12'><p>$countResult results for \"<b>$searchText\"</b></p></div>";
        } else { //if the search input is empty, show all products
            for ($i = 0; $i < sizeof($products); $i++) {
                $html .= generateProductHtml($products[$i]);
            }
        }
        
    } else { //when search not invoked, show all products
        global $products;
        for ($i = 0; $i < sizeof($products); $i++) {
            $html .= generateProductHtml($products[$i]);
        }
    }
    print $html; //print search result
}