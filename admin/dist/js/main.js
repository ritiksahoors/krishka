//serial number
let serialNumber = 1; // Initialize the counter
const serialNumberElements = document.querySelectorAll('.serial-no');
serialNumberElements.forEach((element) => {
    element.textContent = serialNumber;
    serialNumber++;
});

//Sweet alert for delete
function confirmDelete(id, tb, tbc, returnpage) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "delete.php?delete=" + id + "&tb=" + tb + "&tbc=" + tbc + "&returnpage=" + returnpage;
        }
    });
}

//for active and inactive
function confirmAction(action, id, tb, tbc, tbc1, returnpage, extra) {
    var actionText = (action === "active") ? "Are you sure you want to set this to inactive?" : "Are you sure you want to set this to active?";
    Swal.fire({
        title: 'Confirmation',
        text: actionText,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, proceed!'
    }).then((result) => {
        if (result.isConfirmed) {
            if (action === "active") {
                window.location.href = "active.php?status=" + id + "&tb=" + tb + "&tbc=" + tbc + "&tbc1=" + tbc1 + "&returnpage=" + returnpage + "&extra=" + extra;
            } else {
                window.location.href = "inactive.php?status0=" + id + "&tb=" + tb + "&tbc=" + tbc + "&tbc1=" + tbc1 + "&returnpage=" + returnpage + "&extra=" + extra;
            }
        }
    });
    return false;
}

/* for category id get */
function myfcn2(idx, category_name) {
    document.getElementById("id2").value = idx;
    document.getElementById("category_name").value = category_name;
}

/* for sub-category id get */
function myfcn3(idx, subcategory_name, category_name) {
    console.log("ID: " + idx, "Sub-Category Name: " + subcategory_name, "Category ID: " + category_name);
    document.getElementById("id3").value = idx;
    document.getElementById("subcategory_name").value = subcategory_name;
    document.getElementById("category_name2").value = category_name;
}


/* calculate the discount price */
const priceInput = document.getElementById('productprice');
const discountInput = document.getElementById('discount');
const discountPriceInput = document.getElementById('productdiscountprice');

function calculateDiscountedPrice() {
    let price = parseFloat(priceInput.value);
    let discount = parseFloat(discountInput.value);

    if (!isNaN(price) && !isNaN(discount)) {
        let discountedPrice = price - (price * discount / 100);
        discountPriceInput.value = discountedPrice.toFixed(2);
    } else {
        discountPriceInput.value = '';
    }
}
priceInput.addEventListener('input', calculateDiscountedPrice);
discountInput.addEventListener('input', calculateDiscountedPrice);

/* for sub-subcategory id get */
function myfcn5(idx, sub_subcategoryname, subcategory_id, category_id) {
    document.getElementById("id89").value = idx;
    document.getElementById("sub_subcategory").value = sub_subcategoryname;
    document.getElementById("subcategoryname1").value = subcategory_id;
    document.getElementById("category_name2").value = category_id;
}

/* for offer id get */
function myfcn6(idx, offer_name, offer_id, offer_dis) {
    document.getElementById("id6").value = idx;
    document.getElementById("offer_name").value = offer_name;
    document.getElementById("offer_id").value = offer_id;
    document.getElementById("offer_dis").value = offer_dis;
}


/*for addproduct close button*/
document.getElementById("closeModalBtn").addEventListener("click", function () {
    window.location.href = "product.php";
});

/* for occasion id get */
function myfcn8(idx, image, occasion1_name) {
    document.getElementById("id88").value = idx;
    document.getElementById("occasion1_img").src = "upload/occasion/" + image;
    document.getElementById("occasion1_name").value = occasion1_name;
}

/* for price id get */
function myfcn9(idx, image22, pricee_name) {
    document.getElementById("id9").value = idx;
    document.getElementById("price1_img").src = "upload/pricee/" + image22;
    document.getElementById("pricee_name").value = pricee_name;
}

/* for price id get */
function myfcn10(idx, hightt1, namee1) {
    document.getElementById("id10").value = idx;
    document.getElementById("hightt1").value = hightt1;
    document.getElementById("namee1").value = namee1;
}

/* for reels id get */
function myfcn11(idx, occ_video_preview, pro_name12, pro_pro12) {
    document.getElementById("id11").value = idx;
    document.getElementById("occ_video_preview").src = "upload/reels/" + occ_video_preview;
    document.getElementById("pro_name12").value = pro_name12;
    document.getElementById("pro_pro12").value = pro_pro12;
}



/*categorywise sub-category in insert*/
$(document).ready(function () {
    $('#category-dropdown').on('change', function () {
        var category_id = this.value;
        $.ajax({
            url: "get_subcat_insert.php",
            type: "POST",
            data: {
                category_id: category_id
            },
            cache: false,
            success: function (result) {
                $("#sub-category-dropdown").html(result);
            }
        });
    });
});


/*categorywise sub-category in update*/
$(document).ready(function () {
    var initialCategoryId = $('#categoryDropdown1').val();
    getSubcategories(initialCategoryId);

    // Event listener to trigger the AJAX request when category changes
    $('#categoryDropdown1').change(function () {
        var categoryId = $(this).val();
        getSubcategories(categoryId);
    });
});


// Function to retrieve subcategories using AJAX
function getSubcategories(categoryId) {
    $.ajax({
        url: 'get_subcat_update.php',
        type: 'POST',
        data: {
            category_id: categoryId
        },
        success: function (response) {
            var subcategoryDropdown = $('#sub-category-dropdown1');
            var selectedSubcategory = subcategoryDropdown
                .val(); // Get the currently selected subcategory

            // Populate subcategory dropdown with options
            subcategoryDropdown.html(response);

            // Move the selected subcategory to the top
            if (selectedSubcategory) {
                var selectedOption = subcategoryDropdown.find('option[value="' +
                    selectedSubcategory +
                    '"]');
                var topOption = subcategoryDropdown.find('option:first');
                selectedOption.detach().insertBefore(topOption);
                selectedOption.prop('selected', true); // Select the moved option
            }
        }
    });
}

/*add product sub-sub-category insert*/
$(document).ready(function () {
    $('#sub-category-dropdown').on('change', function () {
        var subcategory_id = this.value;
        $.ajax({
            url: "get_subsub_insert.php",
            type: "POST",
            data: {
                subcategory_id: subcategory_id
            },
            cache: false,
            success: function (result) {
                $("#sub-sub-category-dropdown").html(result);
            }
        });
    });
});

/*add product sub-category insert (add product)*/
$(document).ready(function () {
    $('#category-dropdown').on('change', function () {
        var category_id = $(this).val();

        if (category_id) {
            $.ajax({
                url: "fetch_subcategory.php",
                type: "POST",
                data: { category_id: category_id },
                success: function (data) {
                    $('#sub-category-dropdown').html(data);
                }
            });
        } else {
            $('#sub-category-dropdown').html('<option value="">Select Sub-Category</option>');
        }
    });
});

/*categorywise sub-sub-category in product update*/
$(document).ready(function () {
    var initialsubCategoryId = $('#sub-category-dropdown1').val();
    getsubSubcategories(initialsubCategoryId);

    $('#sub-category-dropdown1').change(function () {
        var subcategoryId = $(this).val();
        getsubSubcategories(subcategoryId);
    });
});

function getsubSubcategories(subcategoryId) {
    $.ajax({
        url: 'get_subsub_update.php',
        type: 'POST',
        data: {
            subcategory_id: subcategoryId
        },
        success: function (response) {
            var subcategoryDropdown = $('#sub-sub-category-dropdown1');
            var selectedSubcategory = subcategoryDropdown
                .val(); // Get the currently selected subcategory

            // Populate subcategory dropdown with options
            subcategoryDropdown.html(response);

            // Move the selected subcategory to the top
            if (selectedSubcategory) {
                var selectedOption = subcategoryDropdown.find('option[value="' +
                    selectedSubcategory +
                    '"]');
                var topOption = subcategoryDropdown.find('option:first');
                selectedOption.detach().insertBefore(topOption);
                selectedOption.prop('selected', true); // Select the moved option
            }
        }
    });
}

