const productContainer = document.querySelector(".productcontainer"); //productContainer: the dive where shows the products

//display function
function displayProducts(data) {
    productContainer.innerHTML = "";
    for (let i = 0; i < data.length; i++) {
        let productCard = `<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 imgbox">
                                <div class="card">
                                    <a href="./product_details.html?id=${data[i].prod_id}"><img src="./images/${data[i].prod_image}" class="card-img-top" alt="${data[i].prod_name}"></a>
                                    <div class="card-body">
                                        <a href="./product_details.php?id=${data[i].prod_id}"><p class="card-text">${data[i].prod_name}</p></a>
                                        <img src="./images/${data[i].prod_rating_icon}" alt="" width="30%">
                                        <p>$${data[i].prod_price}</p>
                                    </div>
                                </div>
                            </div>`;
        productContainer.innerHTML += productCard;
    }
}


// get sort buttons, enable sort events
let sortBtns = document.querySelectorAll(".sort .dropdown-item");

for (let sortBtn of sortBtns) {
    sortBtn.addEventListener("click", handleSort);
}

function handleSort(e) {
    let sortBtnLabel = e.target.textContent;
    if (sortBtnLabel == "Price low to high") {
        products.sort(function (a, b) {
            return a.prod_price - b.prod_price;
        });
        displayProducts(products);
    }
    if (sortBtnLabel == "Price high to low") {
        products.sort(function (a, b) {
            return b.prod_price - a.prod_price;
        });
        displayProducts(products);
    }
}
//Select one and deselect the others
$(document).off('click', ".form-check :checkbox").on('click', ".form-check :checkbox", function () {
    var flag = $(this).prop("checked");
    $("input[type='checkbox']").prop("checked", false);
    $(this).prop("checked", flag);
});
// get filter content, enable filter events
let filterCbs = document.querySelectorAll(".filter .form-check-input");
for (let filterCb of filterCbs) {
    filterCb.addEventListener("click", handleFilter);
}

function handleFilter(e) {
    let sortFilterLabel = e.target.getAttribute('id');
    let cbData = [];
    //Perform the corresponding sort
    switch (sortFilterLabel) {
        case "defaultCheck1":
            for (let i = 0; i < products.length; i++) {
                if (products[i].prod_price >= 0 && products[i].prod_price < 19) {
                    cbData.push(products[i]);
                }
            }
            console.log(cbData);
            break;

        case "defaultCheck2":
            for (let i = 0; i < products.length; i++) {
                if (products[i].prod_price >= 20 && products[i].prod_price < 39) {
                    cbData.push(products[i]);
                }
            }
            break;

        case "defaultCheck3":
            for (let i = 0; i < products.length; i++) {
                if (products[i].prod_price >= 40 && products[i].prod_price < 60) {
                    cbData.push(products[i]);
                }
            }
            break;

        case "defaultCheck4":
            for (let i = 0; i < products.length; i++) {
                if (products[i].prod_price >= 60) {
                    cbData.push(products[i]);
                }
            }
            break;
        case "defaultCheck5":
            for (let i = 0; i < products.length; i++) {
                if (products[i].prod_rating_icon.charAt(0) == 5) {
                    cbData.push(products[i]);
                }
            }
            break;
        case "defaultCheck6":
            for (let i = 0; i < products.length; i++) {
                if (products[i].prod_rating_icon.charAt(0) == 4) {
                    cbData.push(products[i]);
                }
            }
            break;
        case "defaultCheck7":
            for (let i = 0; i < products.length; i++) {
                if (products[i].prod_rating_icon.charAt(0) == 3) {
                    cbData.push(products[i]);
                }
            }
            break;
        case "defaultCheck8":
            for (let i = 0; i < products.length; i++) {
                if (products[i].prod_rating_icon.charAt(0) == 2) {
                    cbData.push(products[i]);
                }
            }
            break;
        case "defaultCheck9":
            for (let i = 0; i < products.length; i++) {
                if (products[i].prod_rating_icon.charAt(0) == 1) {
                    cbData.push(products[i]);
                }
            }
            break;
    }
    displayProducts(cbData);

}


