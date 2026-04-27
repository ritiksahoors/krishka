
<?php
$id = urldecode(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishika Collections | Updateproduct</title>
    <link href="dist/img/titleimage1.png" rel="icon">
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
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
                            <h3 class="home_color">Update Product</h3>
                            <?php
                            include 'conn.php';
                            $sql = "SELECT * FROM product WHERE id = '$id'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            ?>
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" name="id4" value="<?php echo $row["id"]; ?>" id="id4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="exampleInputcname">Product Name:</label>
                                                <input type="text" class="form-control" id="productname"
                                                    placeholder="Enter Product Name" name="productname"
                                                    value="<?php echo $row["pro_name"]; ?>"
                                                    title="Enter a valid name (up to 50 characters)">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="subcategoryDropdown">Select Category:</label>
                                                <select class="form-control" name="category" id="categoryDropdown1">
                                                    <option value="">Select Category</option>
                                                    <?php
                                                    $sql1 = "SELECT * FROM category";
                                                    $result1 = $conn->query($sql1);
                                                    while ($row1 = $result1->fetch_assoc()) {
                                                        $selectedCategory = ($row1["id"] == $row["category_id"]) ? "selected" : "";
                                                    ?>
                                                        <option value="<?php echo $row1["id"]; ?>"
                                                            <?php echo $selectedCategory; ?>>
                                                            <?php echo $row1["category_name"]; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="SUBCATEGORY">Sub-Category:</label>
                                                <select class="form-control" name="subcategory"
                                                    id="sub-category-dropdown1">
                                                    <?php
                                                    $selectedSubcategoryId = $row["sub_category_id"];
                                                    $sql2 = "SELECT * FROM sub_category WHERE category_id = '" . $row['category_id'] . "'";
                                                    $result2 = $conn->query($sql2);
                                                    while ($row2 = $result2->fetch_assoc()) {
                                                        $selectedSubcategory = ($row2["id"] == $selectedSubcategoryId) ? "selected" : "";
                                                        echo '<option value="' . $row2["id"] . '" ' . $selectedSubcategory . '>';
                                                        echo $row2["sub_category_name"];
                                                        echo '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="sub SUBCATEGORY">Sub Sub-Category:</label>
                                                <select class="form-control" name="subsubcategory"
                                                    id="sub-sub-category-dropdown1">
                                                    <?php
                                                    $selectedsubSubcategoryId = $row["sub_subcategory_id"];
                                                    $sql3 = "SELECT * FROM sub_subcategory WHERE sub_category_id = '" . $row['sub_category_id'] . "'";
                                                    $result3 = $conn->query($sql3);
                                                    while ($row3 = $result3->fetch_assoc()) {
                                                        $selectedsubSubcategory = ($row3["id"] == $selectedsubSubcategoryId) ? "selected" : "";
                                                        echo '<option value="' . $row3["id"] . '" ' . $selectedsubSubcategory . '>';
                                                        echo $row3["sub_subcategoryname"];
                                                        echo '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputcname">Product Ratings:</label>
                                                <input type="text" class="form-control" id="exampleInputproductname" name="ratingss" value="<?php echo $row["rating"]; ?>">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputcname">Product Reviews:</label>
                                                <input type="text" class="form-control" id="exampleInputproductname" name="reviewss" value="<?php echo $row["review"]; ?>">
                                            </div>
                                            <div class="form-group col-4">
                                                <label for="exampleInputcname">Product Price:</label>
                                                <input type="text" class="form-control" id="productprice1"
                                                    placeholder="Enter Product Code"
                                                    value="<?php echo $row["product_price"]; ?>" name="productprice11"
                                                    >
                                            </div>
                                            <div class="form-group col-4">
                                                <label for="exampleInputcname">Discount:</label>
                                                <input type="text" class="form-control" id="discount1"
                                                    placeholder="Enter Product Color"
                                                    value="<?php echo $row["pro_discount"]; ?>" name="discount11">
                                            </div>
                                            <div class="form-group col-4">
                                                <label for="exampleInputcname">Product Discount Price:</label>
                                                <input type="text" class="form-control" id="productdiscountprice1"
                                                    placeholder="Enter Product Size"
                                                    value="<?php echo $row["product_discount_price"]; ?>"
                                                    name="productdiscountprice11" pattern="\d+">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image1:</label>
                                                <input type="file" name="image1" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image3').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image3" src="dist/img/noimage1.png" alt="New image" width="50"
                                                    height="50" />
                                                <?php
                                                if (!empty($row['product_image1'])) {
                                                    $imagePath = 'upload/product/' . $row['product_image1'];
                                                    $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                    if (!empty($extension)) {
                                                        echo '<img src="' . $imagePath . '" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">';
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image2:</label>
                                                <input type="file" name="image2" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image4').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image4" src="dist/img/noimage1.png" alt="New image" width="50"
                                                    height="50" />
                                                <?php
                                                if (!empty($row['product_image2'])) {
                                                    $imagePath = 'upload/product/' . $row['product_image2'];
                                                    $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                    if (!empty($extension)) {
                                                        echo '<img src="' . $imagePath . '" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">';
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image3:</label>
                                                <input type="file" name="image3" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image5').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image5" src="dist/img/noimage1.png" alt="New image" width="50"
                                                    height="50" />
                                                <?php
                                                if (!empty($row['product_image3'])) {
                                                    $imagePath = 'upload/product/' . $row['product_image3'];
                                                    $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                    if (!empty($extension)) {
                                                        echo '<img src="' . $imagePath . '" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">';
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image4:</label>
                                                <input type="file" name="image4" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image6').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image6" src="dist/img/noimage1.png" alt="New image" width="50"
                                                    height="50" />
                                                <?php
                                                if (!empty($row['product_image4'])) {
                                                    $imagePath = 'upload/product/' . $row['product_image4'];
                                                    $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                    if (!empty($extension)) {
                                                        echo '<img src="' . $imagePath . '" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">';
                                                    }
                                                }
                                                ?>
                                            </div>
                                             <div class="form-group col-4">
                                                <label for="exampleInputcname">Fabric:</label>
                                                <input type="text" class="form-control" id="fabric11" name="fabric1"
                                                    value="<?php echo $row["fabric"]; ?>">
                                            </div>
                                             <div class="form-group col-3">
                                                <label for="exampleInputcname">Blouse:</label>
                                                <input type="text" class="form-control" id="blouse11" name="blouse1"
                                                    value="<?php echo $row["blouse"]; ?>">
                                            </div>
                                            <!-- <div class="form-group col-3">
                                                <label for="exampleInputcname">About Item:</label>
                                                <input type="text" class="form-control" id="about_item11" name="about_item1"
                                                    value="<?php echo $row["about_item"]; ?>">
                                            </div> -->
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Size:</label>
                                                <input type="text" class="form-control" id="size11" name="size1"
                                                    value="<?php echo $row["sizee"]; ?>">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="subcategoryDropdown">Select Price:</label>
                                                <select class="form-control" name="under_price1" id="under_price11">
                                                    <option value="">Select Price</option>
                                                    <?php
                                                    $sql5 = "SELECT * FROM price";
                                                    $result5 = $conn->query($sql5);
                                                    while ($row5 = $result5->fetch_assoc()) {
                                                        $selectedOccasion = ($row5["id"] == $row["pricee"]) ? "selected" : "";
                                                    ?>
                                                        <option value="<?php echo $row5["id"]; ?>"
                                                            <?php echo $selectedOccasion; ?>>
                                                            <?php echo $row5["name"]; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Color:</label>
                                                <input type="text" class="form-control" id="color11" name="color1"
                                                    value="<?php echo $row["colorr"]; ?>">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Stock:</label>
                                                <input type="text" class="form-control" id="size11" name="size1"
                                                    value="<?php echo $row["stockk"]; ?>">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Manufacture:</label>
                                                <input type="text" class="form-control" id="manufacture11" name="manufacture1"
                                                    value="<?php echo $row["manuufacturee"]; ?>">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Packer:</label>
                                                <input type="text" class="form-control" id="packer11" name="packer1"
                                                    value="<?php echo $row["packer"]; ?>">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Item Weight:</label>
                                                <input type="text" class="form-control" id="itemweight11" name="itemweight1"
                                                    value="<?php echo $row["item_weight"]; ?>">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="exampleInputcname">Generic Name:</label>
                                                <input type="text" class="form-control" id="genericnm11" name="genericnm1"
                                                    value="<?php echo $row["generic_nm"]; ?>">
                                            </div>
                                             <div class="form-group col-12">
                                                <label for="exampleInputcname">About Item:</label>
                                                <textarea id="content" name="content"
                                                    class="form-control"><?php echo $row["about_item"]; ?></textarea>
                                            </div>
                                            <?php
                                            // Convert stored IDs into array
                                            $selectedHighlights = array_filter(explode(',', $row["pro_high_id"]));
                                            ?>  
                                            <div class="form-group col-6">
                                                <label>Product Highlights</label>
                                                <select class="form-control" name="pro_high77[]" id="pro_highhh" multiple required>
                                                    <?php
                                                    include "conn.php";
                                                    $result6 = mysqli_query($conn, "SELECT * FROM pro_high");

                                                    while ($row6 = mysqli_fetch_assoc($result6)) {
                                                        $selected = in_array($row6['id'], $selectedHighlights) ? 'selected' : '';
                                                        ?>
                                                        <option value="<?= $row6['id']; ?>" <?= $selected; ?>>
                                                            <?= htmlspecialchars($row6['name']); ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="text">Keywords:</label>
                                                <input type="text" class="form-control" id="tag-input1" name="keywords1"
                                                    value="<?php echo $row["keywordss"]; ?>">
                                            </div>
                                            <div class="form-group col-12">
                                            <label for="exampleInputcname">Meta Description:</label>
                                            <input type="text"
                                                class="form-control"
                                                name="metadescription1"
                                                value="<?php echo htmlspecialchars($row['meta_desc'] ?? ''); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>

                                        <button type="submit" name="productupdate" value="submit"
                                            class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- php code of update -->
    <?php
    if (isset($_POST['productupdate'])) {
        include 'conn.php';
        $upload_dir = "upload/product/";
        $video_upload_dir = "upload/product/video/";

        function handleFileUpload($fieldName, $targetColumnName)
        {
            global $conn, $upload_dir;

            if (empty($_FILES[$fieldName]['name'])) {
                return false;
            }

            $image_name = $_FILES[$fieldName]['name'];
            $image_tmp = $_FILES[$fieldName]['tmp_name'];
            $extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
            $new_file_name = uniqid() . '.' . $extension;

            // Delete old image
            $sql = "SELECT $targetColumnName FROM product WHERE id='{$_POST['id4']}'";
            $result = $conn->query($sql);
            if ($result && $row = $result->fetch_assoc()) {
                if (!empty($row[$targetColumnName])) {
                    $old_file = $upload_dir . $row[$targetColumnName];
                    if (file_exists($old_file)) {
                        unlink($old_file);
                    }
                }
            }
            if (move_uploaded_file($image_tmp, $upload_dir . $new_file_name)) {
                return $new_file_name;
            }

            return false;
        }

        /* ================= VIDEO UPLOAD FUNCTION ================= */
        function handleVideoUpload($fieldName, $targetColumnName)
        {
            global $conn, $video_upload_dir;

            if (empty($_FILES[$fieldName]['name'])) {
                return false;
            }

            $video_name = $_FILES[$fieldName]['name'];
            $video_tmp = $_FILES[$fieldName]['tmp_name'];
            $extension = strtolower(pathinfo($video_name, PATHINFO_EXTENSION));

            // Allow only MP4
            if ($extension !== 'mp4') {
                return false;
            }

            $new_file_name = uniqid() . '.mp4';

            // Delete old video
            $sql = "SELECT $targetColumnName FROM product WHERE id='{$_POST['id4']}'";
            $result = $conn->query($sql);
            if ($result && $row = $result->fetch_assoc()) {
                if (!empty($row[$targetColumnName])) {
                    $old_video = $video_upload_dir . $row[$targetColumnName];
                    if (file_exists($old_video)) {
                        unlink($old_video);
                    }
                }
            }

            if (move_uploaded_file($video_tmp, $video_upload_dir . $new_file_name)) {
                return $new_file_name;
            }

            return false;
        }

        $new_file_name1 = handleFileUpload('image1', 'product_image1');
        $new_file_name2 = handleFileUpload('image2', 'product_image2');
        $new_file_name3 = handleFileUpload('image3', 'product_image3');
        $new_file_name4 = handleFileUpload('image4', 'product_image4');

        $new_video5 = handleVideoUpload('video5', 'product_video5');

        /* ================= FORM DATA ================= */
        $id = $_POST["id4"];
        $productname = $conn->real_escape_string(htmlspecialchars($_POST["productname"]));
        $productshortname = $conn->real_escape_string(htmlspecialchars($_POST["productshortname"]));
        

        $category = $_POST["category"];
        $subcategory = $_POST["subcategory"];
        $subsubcategory = $_POST["subsubcategory"];
        $procode1 = $_POST["procode1"];
        $productprice11 = $_POST["productprice11"];
        $discount11 = $_POST["discount11"];
        $productdiscountprice11 = $_POST["productdiscountprice11"];
        $new1 = $_POST["new1"] ?? 0;
        $premiumm1 = $_POST["premiumm1"] ?? 0;
        $hot1 = $_POST["hot1"] ?? 0;

        $fabric1 = $_POST["fabric1"];
        $blouse1 = $_POST["blouse1"];
        $care1 = $_POST["care1"];
        $dimen1 = $_POST["dimen1"];
        $ave_offer1 = $_POST["ave_offer1"];
        $about_item1 = $_POST["about_item1"];
        $size1 = $_POST["size1"];
        $under_price1 = $_POST["under_price1"];
        $color1 = $_POST["color1"];
        $manufacture1 = $_POST["manufacture1"];
        $packer1 = $_POST["packer1"];
        $itemweight1 = $_POST["itemweight1"];
        $netquantity1 = $_POST["netquantity1"];
        $genericnm1 = $_POST["genericnm1"];
        $pro_high77 = $_POST['pro_high77']; // this is an array
        $pro_high_id = implode(',', array_map('intval', $pro_high77));
        $keywords1 = $conn->real_escape_string($_POST["keywords1"]);
        $metadescription1 = $conn->real_escape_string(htmlspecialchars($_POST["metadescription1"]));

        /* ================= UPDATE QUERY ================= */
        $sql = "UPDATE product SET
            pro_name='$productname',
            product_short_nm='$productshortname',
            category_id='$category',
            sub_category_id='$subcategory',
            sub_subcategory_id='$subsubcategory',
            product_code='$procode1',
            product_price='$productprice11',
            pro_discount='$discount11',
            product_discount_price='$productdiscountprice11',
            neww='$new1',
            premiumm='$premiumm1',
            hott='$hot1',
            fabric='$fabric1',
            blousee='$blouse1',
            caree='$care1',
            dimenn='$dimen1',
            ave_offer='$ave_offer1',
            about_item='$about_item1',
            sizee='$size1',
            pricee='$under_price1',
            colorr='$color1',
            packer='$packer1',
            item_weight='$itemweight1',
            net_quentity='$netquantity1',
            generic_nm='$genericnm1',
            pro_high_id='$pro_high_id',
            keywordss='$keywords1',
            meta_desc='$metadescription1'";

        if ($new_file_name1)
            $sql .= ", product_image1='$new_file_name1'";
        if ($new_file_name2)
            $sql .= ", product_image2='$new_file_name2'";
        if ($new_file_name3)
            $sql .= ", product_image3='$new_file_name3'";
        if ($new_file_name4)
            $sql .= ", product_image4='$new_file_name4'";
        if ($new_video5)
            $sql .= ", product_video5='$new_video5'";

        $sql .= " WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
            toastr.success('Product updated successfully');
            setTimeout(function(){
                window.location.href = 'product';
            }, 2000);
        </script>";
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
    }
    ?>

    <?php include 'common/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script>
    CKEDITOR.replace('content', {
        height: 300,
        filebrowserUploadUrl: "upload.php"
    });
    </script>
    <script>
        //for keywords
        (function() {
            "use strict"
            // Plugin Constructor
            var TagsInput = function(opts) {
                this.options = Object.assign(TagsInput.defaults, opts);
                this.init();
            }

            // Initialize the plugin
            TagsInput.prototype.init = function(opts) {
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
            TagsInput.prototype.addTag = function(string) {
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
                closeIcon.addEventListener('click', function(e) {
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
            TagsInput.prototype.deleteTag = function(tag, i) {
                tag.remove();
                this.arr.splice(i, 1);
                this.orignal_input.value = this.arr.join(',');
                return this;
            }

            // Make sure input string have no error with the plugin
            TagsInput.prototype.anyErrors = function(string) {
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
            TagsInput.prototype.addData = function(array) {
                var plugin = this;

                array.forEach(function(string) {
                    plugin.addTag(string);
                })
                return this;
            }

            // Get the Input String
            TagsInput.prototype.getInputString = function() {
                return this.arr.join(',');
            }

            // destroy the plugin
            TagsInput.prototype.destroy = function() {
                this.orignal_input.removeAttribute('hidden');

                delete this.orignal_input;
                var self = this;

                Object.keys(this).forEach(function(key) {
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
                tags.wrapper.addEventListener('click', function() {
                    tags.input.focus();
                });

                tags.input.addEventListener('keydown', function(e) {
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

    <script>
        function previewVideo5(input) {
            if (input.files && input.files[0]) {
                const video = document.getElementById('video19');
                video.src = URL.createObjectURL(input.files[0]);
                video.load();
                video.style.display = 'block';
            }
        }
    </script>
</body>

</html>