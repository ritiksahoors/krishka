<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utkalikart | Add Product</title>
    <link href="dist/img/titleimage1.png" rel="icon">
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/42.0.0/classic/ckeditor.js"></script>
    <!-- toaster -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php include 'common/navbar.php'; ?>
<!-- Main Sidebar Container -->
<?php include 'common/sidebar.php'; ?>

<body>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h3 class="mb-3 home_color">Add Product</h3>
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body p-0">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <input type="text" class="form-control" id="exampleInputproductname"
                                                    placeholder="Enter Product Name" name="productname"
                                                    title="Enter a valid name (up to 50 characters)">
                                            </div>
                                            <div class="form-group col-3">
                                                <select class="form-control" name="category" id="category-dropdown">
                                                    <option value="">Select Category</option>
                                                    <?php
                                                    include "conn.php";
                                                    $result = mysqli_query($conn, "SELECT * FROM category");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['id']; ?>">
                                                            <?php echo $row["category_name"]; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <select class="form-control" name="subcategory"
                                                    id="sub-category-dropdown">
                                                    <option value="">Select Sub-Category</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <select class="form-control" name="subsubcategory"
                                                    id="sub-sub-category-dropdown">
                                                    <option value="">Select Sub Sub Category</option>
                                                    <option value="0">None</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" id="exampleInputproductname"
                                                    placeholder="Enter Ratings" name="ratingss">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control" id="exampleInputproductname"
                                                    placeholder="Enter Reviews" name="reviewss">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Product Price" id="productprice"
                                                    name="productprice">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Product Discount" id="discountt"
                                                    name="discount1">
                                            </div>
                                            <div class="form-group col-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Product Discount Price"
                                                    id="productdiscountprice1" name="productdiscountprice">
                                            </div>
                                            <div class="form-group col-4">
                                                <select class="form-control" name="ppduct_fabric" id="fabriic1">
                                                    <option value="">Select Fabric</option>
                                                    <?php
                                                    include "conn.php";
                                                    $result = mysqli_query($conn, "SELECT * FROM fabric");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['id']; ?>">
                                                            <?php echo $row["name"]; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-4">
                                                <input type="text" class="form-control" placeholder="Enter Length"
                                                    id="length1" name="ppduct_length">
                                            </div>
                                            <div class="form-group col-4">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Blouse Included Or Not" id="blouse1"
                                                    name="ppduct_blouse">
                                            </div>

                                            <div class="form-group col-3">
                                                <label for="image">Product Image1:</label>
                                                <input type="file" name="image1" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image15').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image15" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image2:</label>
                                                <input type="file" name="image2" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image16').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image16" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image3:</label>
                                                <input type="file" name="image3" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image17').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image17" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image4:</label>
                                                <input type="file" name="image4" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image18').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image18" src="dist/img/noimage1.png" alt="image" width="50"
                                                    height="50" />
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="exampleInputcname">About Item:</label>
                                                <textarea id="content" name="about_item" class="form-control" rows="6"
                                                    required></textarea>
                                            </div>
                                            <!-- <div class="form-group col-12">
                                                <label for="text">Color:</label>
                                                <input type="text" name="keywords1" id="tag-input1">
                                            </div> -->
                                            <div class="form-group col-4">
                                                <select class="form-control" name="keywords1" id="fabriic1">
                                                    <option value="">Select Colour</option>
                                                    <?php
                                                    include "conn.php";
                                                    $result = mysqli_query($conn, "SELECT * FROM color");
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                        <option value="<?php echo $row['id']; ?>">
                                                            <?php echo $row["name"]; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-8">
                                                <label for="text">Others:</label>
                                                <div class="checkbox-container">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="featured_product" name="featured" value="1">
                                                        <label class="form-check-label" for="featured_product">Featured
                                                            Product</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="specialoffers" name="specialoffers" value="1">
                                                        <label class="form-check-label" for="specialoffers">Special
                                                            Offers</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" id="closeModalBtn"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" name="product_update" class="btn btn-success">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
    if (isset($_POST['product_update'])) {
        include 'conn.php';
        function handleFileUpload($fieldName, $uploadDir)
        {
            if (!isset($_FILES[$fieldName]) || $_FILES[$fieldName]['error'] !== 0) {
                return null;
            }

            $file_name = $_FILES[$fieldName]['name'];
            $file_tmp = $_FILES[$fieldName]['tmp_name'];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            $new_file_name = uniqid() . '.' . $file_ext;

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            if (move_uploaded_file($file_tmp, $uploadDir . $new_file_name)) {
                return $new_file_name;
            }

            return null;
        }
        $image_upload_dir = "upload/product/";

        $new_file_name1 = handleFileUpload('image1', $image_upload_dir);
        $new_file_name2 = handleFileUpload('image2', $image_upload_dir);
        $new_file_name3 = handleFileUpload('image3', $image_upload_dir);
        $new_file_name4 = handleFileUpload('image4', $image_upload_dir);

        $productname = $conn->real_escape_string($_POST["productname"]);
        $ratingss = $conn->real_escape_string($_POST["ratingss"]);
        $reviewss = $conn->real_escape_string($_POST["reviewss"]);
        $category = $conn->real_escape_string($_POST["category"]);
        $subcategory = $conn->real_escape_string($_POST["subcategory"]);
        $subsubcategory = $conn->real_escape_string($_POST["subsubcategory"]);
        $productprice = $conn->real_escape_string($_POST["productprice"]);
        $discount1 = $conn->real_escape_string($_POST["discount1"]);
        $productdiscountprice = $conn->real_escape_string($_POST["productdiscountprice"]);
        $fabric = $conn->real_escape_string($_POST["ppduct_fabric"]);
        $ppduct_length = $conn->real_escape_string($_POST["ppduct_length"]);
        $ppduct_length = $conn->real_escape_string($_POST["ppduct_length"]);
        $blouse = $conn->real_escape_string($_POST["ppduct_blouse"]);
        $about_item = $conn->real_escape_string($_POST["about_item"]);
        $color = $conn->real_escape_string($_POST["keywords1"]);
        $featured = isset($_POST["featured"]) ? $_POST["featured"] : 0;
        $specialoffers = isset($_POST["specialoffers"]) ? $_POST["specialoffers"] : 0;

        /* ==============================
           INSERT QUERY
        =============================== */
        $sql = "INSERT INTO product (pro_name, rating, review, category_id, sub_category_id, sub_subcategory_id, product_price, pro_discount, product_discount_price, fabric, blouse, about_item, product_image1, product_image2, product_image3, product_image4, color, featured_pro, special_off, status
    ) VALUES ('$productname', '$ratingss', '$reviewss', '$category', '$subcategory', '$subsubcategory', '$productprice', '$discount1', '$productdiscountprice', '$fabric', '$blouse', '$about_item', '$new_file_name1', '$new_file_name2', '$new_file_name3', '$new_file_name4', '$color', '$featured', '$specialoffers', '1'
    )";

        if ($conn->query($sql)) {
            echo "<script>
            toastr.success('Product added successfully');
            setTimeout(() => window.location.href = 'product', 2000);
        </script>";
        } else {
            echo "Database Error: " . $conn->error;
        }

        $conn->close();
    }
    ?>


    <script>
        CKEDITOR.replace('content', {
            height: 300,
            filebrowserUploadUrl: "upload.php"
        });
    </script>

    <script>
        //for keywords
        (function () {
            "use strict"
            // Plugin Constructor
            var TagsInput = function (opts) {
                this.options = Object.assign(TagsInput.defaults, opts);
                this.init();
            }

            // Initialize the plugin
            TagsInput.prototype.init = function (opts) {
                this.options = opts ? Object.assign(this.options, opts) : this.options;

                if (this.initialized)
                    this.destroy();

                if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                    console.error("tags-input couldn't find an element with the specified ID");
                    return this;
                }
                this.arr = [];
                this.wrapper = document.createElement('div');
                this.input = document.createElement('input');
                init(this);
                initEvents(this);
                // Check if there's existing data and populate the input field with tags
                if (this.orignal_input.value) {
                    var existingTags = this.orignal_input.value.split(',');
                    for (var i = 0; i < existingTags.length; i++) {
                        this.addTag(existingTags[i]);
                    }
                }
                this.initialized = true;
                return this;
            }

            // Add Tags
            TagsInput.prototype.addTag = function (string) {
                if (this.anyErrors(string))
                    return;

                this.arr.push(string);
                var tagInput = this;

                var tag = document.createElement('span');
                tag.className = this.options.tagClass;
                tag.innerText = string;

                var closeIcon = document.createElement('a');
                closeIcon.innerHTML = '&times;';

                // delete the tag when icon is clicked
                closeIcon.addEventListener('click', function (e) {
                    e.preventDefault();
                    var tag = this.parentNode;

                    for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                        if (tagInput.wrapper.childNodes[i] == tag)
                            tagInput.deleteTag(tag, i);
                    }
                })
                tag.appendChild(closeIcon);
                this.wrapper.insertBefore(tag, this.input);
                this.orignal_input.value = this.arr.join(',');

                return this;
            }

            // Delete Tags
            TagsInput.prototype.deleteTag = function (tag, i) {
                tag.remove();
                this.arr.splice(i, 1);
                this.orignal_input.value = this.arr.join(',');
                return this;
            }

            // Make sure input string have no error with the plugin
            TagsInput.prototype.anyErrors = function (string) {
                if (this.options.max != null && this.arr.length >= this.options.max) {
                    console.log('max tags limit reached');
                    return true;
                }
                if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                    console.log('duplicate found " ' + string + ' " ')
                    return true;
                }

                return false;
            }

            // Add tags programmatically 
            TagsInput.prototype.addData = function (array) {
                var plugin = this;

                array.forEach(function (string) {
                    plugin.addTag(string);
                })
                return this;
            }

            // Get the Input String
            TagsInput.prototype.getInputString = function () {
                return this.arr.join(',');
            }

            // destroy the plugin
            TagsInput.prototype.destroy = function () {
                this.orignal_input.removeAttribute('hidden');

                delete this.orignal_input;
                var self = this;

                Object.keys(this).forEach(function (key) {
                    if (self[key] instanceof HTMLElement)
                        self[key].remove();

                    if (key != 'options')
                        delete self[key];
                });

                this.initialized = false;
            }

            // Private function to initialize the tag input plugin
            function init(tags) {
                tags.wrapper.append(tags.input);
                tags.wrapper.classList.add(tags.options.wrapperClass);
                tags.orignal_input.setAttribute('hidden', 'true');
                tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
            }

            // initialize the Events
            function initEvents(tags) {
                tags.wrapper.addEventListener('click', function () {
                    tags.input.focus();
                });

                tags.input.addEventListener('keydown', function (e) {
                    var str = tags.input.value.trim();

                    if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                        e.preventDefault();
                        tags.input.value = "";
                        if (str != "")
                            tags.addTag(str);
                    }

                });
            }
            // Set All the Default Values
            TagsInput.defaults = {
                selector: '',
                wrapperClass: 'tags-input-wrapper',
                tagClass: 'tag',
                max: null,
                duplicate: false
            }

            window.TagsInput = TagsInput;

        })();
        var tagInput1 = new TagsInput({
            selector: 'tag-input1',
            duplicate: false,
            max: 10
        });
        tagInput1.addData([])
    </script>

</body>
<?php include 'common/footer.php'; ?>
<!-- for catalogue dropdown -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {

        // CATEGORY ➜ SUBCATEGORY
        $('#category-dropdown').change(function () {
            var category_id = $(this).val();

            $('#sub-sub-category-dropdown').html('<option value="">Select Sub Sub Category</option><option value="0">None</option>');

            if (category_id) {
                $.ajax({
                    url: "fetch_subcategory.php",
                    type: "POST",
                    data: {
                        category_id: category_id
                    },
                    success: function (data) {
                        $('#sub-category-dropdown').html(data);
                    }
                });
            } else {
                $('#sub-category-dropdown').html('<option value="">Select Sub-Category</option>');
            }
        });

        // SUBCATEGORY ➜ SUBSUBCATEGORY
        $('#sub-category-dropdown').change(function () {
            var subcategory_id = $(this).val();

            if (subcategory_id) {
                $.ajax({
                    url: "fetch_subsubcategory.php",
                    type: "POST",
                    data: {
                        subcategory_id: subcategory_id
                    },
                    success: function (data) {
                        $('#sub-sub-category-dropdown').html(data);
                    }
                });
            } else {
                $('#sub-sub-category-dropdown').html('<option value="">Select Sub Sub Category</option><option value="0">None</option>');
            }
        });

    });
</script>
<!--for product price and discount price -->
<script>
    $(document).ready(function () {

        $('#productprice, #discountt').on('keyup change', function () {

            let price = parseFloat($('#productprice').val());
            let discount = parseFloat($('#discountt').val());

            if (!isNaN(price) && !isNaN(discount)) {

                let discountAmount = (price * discount) / 100;
                let finalPrice = price - discountAmount;

                $('#productdiscountprice1').val(finalPrice.toFixed(2));
            } else {
                $('#productdiscountprice1').val('');
            }

        });

    });
</script>
<script>
    CKEDITOR.replace('content', {
        height: 300,
        filebrowserUploadUrl: "upload.php"
    });

    //for keywords
    (function () {
        "use strict"
        var TagsInput = function (opts) {
            this.options = Object.assign(TagsInput.defaults, opts);
            this.init();
        }
        TagsInput.prototype.init = function (opts) {
            this.options = opts ? Object.assign(this.options, opts) : this.options;

            if (this.initialized)
                this.destroy();

            if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                console.error("tags-input couldn't find an element with the specified ID");
                return this;
            }
            this.arr = [];
            this.wrapper = document.createElement('div');
            this.input = document.createElement('input');
            init(this);
            initEvents(this);

            this.initialized = true;
            return this;
        }
        // Add Tags
        TagsInput.prototype.addTag = function (string) {

            if (this.anyErrors(string))
                return;
            this.arr.push(string);
            var tagInput = this;
            var tag = document.createElement('span');
            tag.className = this.options.tagClass;
            tag.innerText = string;
            var closeIcon = document.createElement('a');
            closeIcon.innerHTML = '&times;';
            // delete the tag when icon is clicked
            closeIcon.addEventListener('click', function (e) {
                e.preventDefault();
                var tag = this.parentNode;
                for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                    if (tagInput.wrapper.childNodes[i] == tag)
                        tagInput.deleteTag(tag, i);
                }
            })
            tag.appendChild(closeIcon);
            this.wrapper.insertBefore(tag, this.input);
            this.orignal_input.value = this.arr.join(',');
            return this;
        }

        // Delete Tags
        TagsInput.prototype.deleteTag = function (tag, i) {
            tag.remove();
            this.arr.splice(i, 1);
            this.orignal_input.value = this.arr.join(',');
            return this;
        }

        // Make sure input string have no error with the plugin
        TagsInput.prototype.anyErrors = function (string) {
            if (this.options.max != null && this.arr.length >= this.options.max) {
                console.log('max tags limit reached');
                return true;
            }

            if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                console.log('duplicate found " ' + string + ' " ')
                return true;
            }

            return false;
        }

        // Add tags programmatically 
        TagsInput.prototype.addData = function (array) {
            var plugin = this;

            array.forEach(function (string) {
                plugin.addTag(string);
            })
            return this;
        }

        // Get the Input String
        TagsInput.prototype.getInputString = function () {
            return this.arr.join(',');
        }


        // destroy the plugin
        TagsInput.prototype.destroy = function () {
            this.orignal_input.removeAttribute('hidden');

            delete this.orignal_input;
            var self = this;

            Object.keys(this).forEach(function (key) {
                if (self[key] instanceof HTMLElement)
                    self[key].remove();

                if (key != 'options')
                    delete self[key];
            });

            this.initialized = false;
        }

        // Private function to initialize the tag input plugin
        function init(tags) {
            tags.wrapper.append(tags.input);
            tags.wrapper.classList.add(tags.options.wrapperClass);
            tags.orignal_input.setAttribute('hidden', 'true');
            tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
        }

        // initialize the Events
        function initEvents(tags) {
            tags.wrapper.addEventListener('click', function () {
                tags.input.focus();
            });
            tags.input.addEventListener('keydown', function (e) {
                var str = tags.input.value.trim();
                if (!!(~[9, 13, 188].indexOf(e.keyCode))) {
                    e.preventDefault();
                    tags.input.value = "";
                    if (str != "")
                        tags.addTag(str);
                }
            });
        }

        // Set All the Default Values
        TagsInput.defaults = {
            selector: '',
            wrapperClass: 'tags-input-wrapper',
            tagClass: 'tag',
            max: null,
            duplicate: false
        }
        window.TagsInput = TagsInput;
    })();
    var tagInput1 = new TagsInput({
        selector: 'tag-input1',
        duplicate: false,
        max: 10
    });
    tagInput1.addData([])
</script>

</html>