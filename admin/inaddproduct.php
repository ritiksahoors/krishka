
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indus-Supply | Add Product</title>
    <link href="dist/img/titleimage.png" rel="icon">
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
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="nav-panel__logo heading_resize">
        <a href="index">
            <h2 class="text-white incolor">INDUS-SUPPLY</h2>
        </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index" class="nav-link">
                                <i class="fas fa-tachometer-alt nav-icon"></i>
                                <p>Dashboard</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="banner" class="nav-link">
                                <i class="fa fa-image nav-icon"></i>
                                <p>Banner</p>
                                <i class="right fas fa-angle-right"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="category" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Category</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="subcategory" class="nav-link">
                                <i class="fa fa-indent nav-icon"></i>
                                <p>Sub-Category</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sub_subcategory" class="nav-link">
                                <i class="fa fa-indent nav-icon"></i>
                                <p>Sub_Subcategories</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="product" class="nav-link active">
                                <i class="fab fa-product-hunt nav-icon"></i>
                                <p>Products</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item" id="catalogue-item">
                            <a href="product" class="nav-link" id="catalogue-link">
                                <i class="fa fa-book nav-icon"></i>
                                <p>Catalogue</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item" id="folder-item" style="display:none;">
                            <a href="folder" class="nav-link" style="background-color: white; color: black;">
                                <i class="fa fa-folder nav-icon"></i>
                                <p>Folder Name</p>
                            </a>
                        </li>
                        <li class="nav-item" id="pdfupload-item" style="display:none;">
                            <a href="pdfupload" class="nav-link" style="background-color: white; color: black;">
                                <i class="fa fa-upload nav-icon"></i>
                                <p>Catalogue Upload</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="servicesconformity" class="nav-link">
                                <i class="fa fa-wrench nav-icon"></i>
                                <p>Control And Conformity</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="enquiry" class="nav-link">
                                <i class="fa fa-question-circle nav-icon"></i>
                                <p>Enquiry</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact" class="nav-link">
                                <i class="fa fa-envelope nav-icon"></i>
                                <p>Contact Us</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="newsletter" class="nav-link">
                                <i class="fa fa-address-card nav-icon"></i>
                                <p>Newsletter</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="metatags" class="nav-link">
                                <i class="fa fa-address-card nav-icon"></i>
                                <p>Meta Tags</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile" class="nav-link">
                                <i class="fa fa-cog nav-icon"></i>
                                <p>Settings</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>

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
                                                <!-- <label for="exampleInputcname">Product Name</label> -->
                                                <input type="text" class="form-control" id="exampleInputproductname"
                                                    placeholder="Enter Product Name" name="productname"
                                                    title="Enter a valid name (up to 50 characters)" required>
                                            </div>
                                            <div class="form-group col-4">
                                                <select class="form-control" name="category" id="category-dropdown"
                                                    required>
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
                                            <div class="form-group col-4">
                                                <select class="form-control" name="subcategory"
                                                    id="sub-category-dropdown" required>
                                                    <option value="">Select Sub-Category</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-4">
                                                <select class="form-control" name="subsubcategory"
                                                    id="sub-sub-category-dropdown" required>
                                                    <option value="">Select Sub Sub Category</option>
                                                    <option value="0">None</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-4">
                                                <input type="text" class="form-control" id="exampleInputproductcode"
                                                    placeholder="Enter Product Code" name="productcode" required>
                                            </div>
                                            <div class="form-group col-4">
                                                <input type="text" class="form-control" id="exampleInputproductprice"
                                                    placeholder="Enter Product Price" name="productprice" pattern="\d+"
                                                    title="Enter an integer value for the product price">
                                            </div>
                                            <div class="form-group col-4">
                                                <input type="text" class="form-control"
                                                    id="exampleInputproductdiscountprice"
                                                    placeholder="Enter Product Discount Price"
                                                    name="productdiscountprice" pattern="\d+"
                                                    title="Enter an integer value for the product price">
                                                <div id="discountPriceError" style="color: red;"></div>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="exampleInputcname">Product Description Or
                                                    Specification:</label>
                                                <textarea id="content" name="content" class="form-control" rows="6"
                                                    required></textarea>
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
                                                        <input class="form-check-input" type="checkbox" id="bestsellers"
                                                            name="bestsellers" value="1">
                                                        <label class="form-check-label"
                                                            for="bestsellers">Bestsellers</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="sale"
                                                            name="sale" value="1">
                                                        <label class="form-check-label" for="sale">Sale</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="toprated"
                                                            name="toprated" value="1">
                                                        <label class="form-check-label" for="toprated">Top Rated</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="specialoffers" name="specialoffers" value="1">
                                                        <label class="form-check-label" for="specialoffers">Special
                                                            Offers</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-4">
                                                <label for="exampleInputtext">Upload Catalogue:
                                                    <span class="required"></span>
                                                </label>
                                                <input type="file" class="form-control" id="exampleInputMOI"
                                                    placeholder="MOU" name="pdf" accept=".pdf,.docx,.doc"
                                                    onchange="checkFileType(this)">
                                                <span id="fileName"></span>
                                            </div>
                                            <!-- <div class="form-group col-12">
                                                <label for="exampleInputcname">Slug:</label>
                                                <input type="text" class="form-control" id="exampleInputslug" name="slug" required>
                                            </div> -->
                                            <div class="form-group col-12">
                                                <label for="text">Keywords:</label>
                                                <input type="text" name="keywords1" id="tag-input1">
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="exampleInputcname">Meta Description:</label>
                                                <textarea name="metadescription" class="form-control"
                                                    required></textarea>
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
        // Function to handle file uploads
        function handleFileUpload($fieldName, $uploadDir)
        {
            global $conn;
            $image_name = $_FILES[$fieldName]['name'];
            $image_size = $_FILES[$fieldName]['size'];
            $image_tmp = $_FILES[$fieldName]['tmp_name'];
            $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
            $new_file_name = uniqid() . '.' . $file_type;

            // Ensure upload directory exists
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true); // Ensure directory is writable
            }

            $target_file = $uploadDir . $new_file_name;

            if (move_uploaded_file($image_tmp, $target_file)) {
                return $new_file_name; // Return the generated file name if upload succeeds
            } else {
                return null; // Return null if upload fails
            }
        }


        // File upload directory
        $upload_dir = "upload/product/";
        // Handle image uploads
        $new_file_name1 = handleFileUpload('image1', $upload_dir);
        $new_file_name2 = handleFileUpload('image2', $upload_dir);
        $new_file_name3 = handleFileUpload('image3', $upload_dir);
        $new_file_name4 = handleFileUpload('image4', $upload_dir);
        // Handle PDF upload
        $new_pdf_name = handleFileUpload('pdf', $upload_dir);
        // Sanitize inputs
        $productname = htmlspecialchars($conn->real_escape_string($_POST["productname"]));
        $category = $conn->real_escape_string($_POST["category"]);
        $subcategory = $conn->real_escape_string($_POST["subcategory"]);
        $subsubcategory = $conn->real_escape_string($_POST["subsubcategory"]);
        $productcode = $conn->real_escape_string($_POST["productcode"]);
        $productprice = $conn->real_escape_string($_POST["productprice"]);
        $productdiscountprice = $conn->real_escape_string($_POST["productdiscountprice"]);
        $productdescription = $conn->real_escape_string($_POST["content"]);
        $featured = isset($_POST["featured"]) ? $_POST["featured"] : 0;
        $bestsellers = isset($_POST["bestsellers"]) ? $_POST["bestsellers"] : 0;
        $sale = isset($_POST["sale"]) ? $_POST["sale"] : 0;
        $toprated = isset($_POST["toprated"]) ? $_POST["toprated"] : 0;
        $specialoffers = isset($_POST["specialoffers"]) ? $_POST["specialoffers"] : 0;
        $slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '_', $conn->real_escape_string($_POST["productname"]))) . '_' . date('d_m_Y');
        // $slug = slugurl($productname);
        // $slug = slugurl($productname, $category, $subcategory, $keywords, $metadescription);
        $keywords = $conn->real_escape_string($_POST["keywords1"]);
        $metadescription = $conn->real_escape_string($_POST["metadescription"]);

        // Insert into database
        $sql = "INSERT INTO product (product_name, category_id, sub_category_id, sub_subcategory_id, product_code, product_price, product_discount_price, product_description, product_image1, product_image2, product_image3, product_image4, featured_product, bestsellers, sale, toprated, specialoffers, pdf, slug, keywords, meta_description,stock, status) 
            VALUES ('$productname', '$category', '$subcategory', '$subsubcategory', '$productcode', '$productprice', '$productdiscountprice', '$productdescription', '$new_file_name1', '$new_file_name2', '$new_file_name3', '$new_file_name4', '$featured', '$bestsellers', '$sale', '$toprated', '$specialoffers', '$new_pdf_name', '$slug', '$keywords', '$metadescription','1', '1')";

        if ($conn->query($sql) === true) {
            echo "<script>
                $(document).ready(function(){
                    toastr.success('Product added successfully');
                    setTimeout(function(){
                        window.location.href = 'product.php';
                    }, 2000); // 2000 milliseconds = 2 seconds
                });
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>

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
</body>
<?php include 'common/footer.php'; ?>
<!-- for catalogue dropdown -->
<script>
    document.getElementById('catalogue-link').addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default link behavior

        // Get the additional menu items
        var folderItem = document.getElementById('folder-item');
        var pdfUploadItem = document.getElementById('pdfupload-item');

        // Toggle the display property of the additional menu items
        if (folderItem.style.display === 'none' && pdfUploadItem.style.display === 'none') {
            folderItem.style.display = 'block';
            pdfUploadItem.style.display = 'block';
        } else {
            folderItem.style.display = 'none';
            pdfUploadItem.style.display = 'none';
        }
    });
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

</html>