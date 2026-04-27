
<?php
$id = urldecode(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indus-Supply | Updateservice</title>
    <link href="dist/img/titleimage.png" rel="icon">
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
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
                            <a href="index.php" class="nav-link">
                                <i class="fas fa-tachometer-alt nav-icon"></i>
                                <p>Dashboard</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="banner.php" class="nav-link">
                                <i class="fa fa-image nav-icon"></i>
                                <p>Banner</p>
                                <i class="right fas fa-angle-right"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="category.php" class="nav-link">
                                <i class="fa fa-list-alt nav-icon"></i>
                                <p>Category</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="subcategory.php" class="nav-link">
                                <i class="fa fa-indent nav-icon"></i>
                                <p>Sub-Category</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sub_subcategory.php" class="nav-link">
                                <i class="fa fa-indent nav-icon"></i>
                                <p>Sub_Subcategories</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="product.php" class="nav-link">
                                <i class="fab fa-product-hunt nav-icon"></i>
                                <p>Products</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item" id="catalogue-item">
                            <a href="product.php" class="nav-link" id="catalogue-link">
                                <i class="fa fa-book nav-icon"></i>
                                <p>Catalogue</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item" id="folder-item" style="display:none;">
                            <a href="folder.php" class="nav-link" style="background-color: white; color: black;">
                                <i class="fa fa-folder nav-icon"></i>
                                <p>Folder Name</p>
                            </a>
                        </li>
                        <li class="nav-item" id="pdfupload-item" style="display:none;">
                            <a href="pdfupload.php" class="nav-link" style="background-color: white; color: black;">
                                <i class="fa fa-upload nav-icon"></i>
                                <p>Catalogue Upload</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="servicesconformity.php" class="nav-link active">
                                <i class="fa fa-wrench nav-icon"></i>
                                <p>Control And Conformity</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="enquiry.php" class="nav-link">
                                <i class="fa fa-question-circle nav-icon"></i>
                                <p>Product Enquiry</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="service_enquiry.php" class="nav-link">
                                <i class="fa fa-question-circle nav-icon"></i>
                                <p>Service Enquiry</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link">
                                <i class="fa fa-envelope nav-icon"></i>
                                <p>Contact Us</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="newsletter.php" class="nav-link">
                                <i class="fa fa-address-card nav-icon"></i>
                                <p>Newsletter</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link">
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
                            <h3 class="home_color">Update Service</h3>
                            <?php
                            include 'conn.php';
                            $sql = "SELECT * FROM service WHERE id = '$id'";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                ?>
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" name="id8" value="<?php echo $row["id"]; ?>" id="id8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="exampleInputcname">Service Name:</label>
                                                <input type="text" class="form-control" id="servicename"
                                                    placeholder="Enter Product Name" name="servicename"
                                                    value="<?php echo $row["servicesp_name"]; ?>"
                                                    title="Enter a valid name (up to 50 characters)" required>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleInputcname">Service Heading:</label>
                                                <input type="text" class="form-control" id="serviceheading"
                                                    placeholder="Enter Product Code"
                                                    value="<?php echo $row["services_heading"]; ?>"
                                                    name="serviceheading" required>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="exampleInputcname">Service Description:</label>
                                                <textarea id="servicedescription" name="servicedescription"
                                                    class="form-control"><?php echo $row["services_description"]; ?></textarea>
                                            </div>
                                            <div class="form-group col-12">
                                                <label for="exampleInputcname">Service Details:</label>
                                                <textarea id="content" name="content"
                                                    class="form-control"><?php echo $row["services_details"]; ?></textarea>
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="image">Product Image1:</label>
                                                <input type="file" name="image1" class="form-control"
                                                    placeholder="image" accept="image/jpeg, image/jpg, image/png"
                                                    onchange="document.getElementById('image3').src = window.URL.createObjectURL(this.files[0])">
                                                <img id="image3" src="dist/img/noimage1.png" alt="New image" width="50"
                                                    height="50" />
                                                <?php
                                                    if (!empty($row['image1'])) {
                                                        $imagePath = 'upload/service/' . $row['image1']; // Make sure to add a slash here
                                                        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                        if (!empty($extension)) {
                                                            echo '<img src="' . $imagePath . '" alt="Image 1" width="50" height="50" class="mt-2 img-fluid">';
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
                                                    if (!empty($row['image2'])) {
                                                        $imagePath = 'upload/service/' . $row['image2']; // Make sure to add a slash here
                                                        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                        if (!empty($extension)) {
                                                            echo '<img src="' . $imagePath . '" alt="Image 2" width="50" height="50" class="mt-2 img-fluid">';
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
                                                    if (!empty($row['image3'])) {
                                                        $imagePath = 'upload/service/' . $row['image3']; // Make sure to add a slash here
                                                        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                        if (!empty($extension)) {
                                                            echo '<img src="' . $imagePath . '" alt="Image 3" width="50" height="50" class="mt-2 img-fluid">';
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
                                                    if (!empty($row['image4'])) {
                                                        $imagePath = 'upload/service/' . $row['image4']; // Make sure to add a slash here
                                                        $extension = pathinfo($imagePath, PATHINFO_EXTENSION);
                                                        if (!empty($extension)) {
                                                            echo '<img src="' . $imagePath . '" alt="Image 4" width="50" height="50" class="mt-2 img-fluid">';
                                                        }
                                                    }
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" id="closeModalBtn"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" name="productupdate" value="submit"
                                            class="btn btn-success">Update</button>
                                    </div>
                            </form>
                            <?php } ?>
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
        $upload_dir = "upload/service/";

        // Function to handle file upload and update
        function handleFileUpload($fieldName, $targetColumnName, $isUploading)
        {
            global $conn, $upload_dir;
            $image_name = $_FILES[$fieldName]['name'];
            $image_tmp = $_FILES[$fieldName]['tmp_name'];
            $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
            $new_file_name = uniqid() . '.' . $file_type;

            // Retrieve the previous file name from the database
            $sql_previous_image = "SELECT $targetColumnName FROM service WHERE id='{$_POST['id8']}'";
            $result = $conn->query($sql_previous_image);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $previous_image = $upload_dir . $row[$targetColumnName];
                // Delete previous file from the upload folder if uploading a new file
                if ($isUploading && !empty($image_name) && $new_file_name !== $row[$targetColumnName]) {
                    if (file_exists($previous_image) && !is_dir($previous_image)) {
                        unlink($previous_image);
                    }
                }
            }
            $target_file = $upload_dir . $new_file_name;
            if (move_uploaded_file($image_tmp, $target_file)) {
                return $new_file_name;
            } else {
                return false;
            }
        }

        // Handle file uploads and get new file names
        $new_file_name1 = handleFileUpload('image1', 'image1', !empty($_FILES['image1']['name']));
        $new_file_name2 = handleFileUpload('image2', 'image2', !empty($_FILES['image2']['name']));
        $new_file_name3 = handleFileUpload('image3', 'image3', !empty($_FILES['image3']['name']));
        $new_file_name4 = handleFileUpload('image4', 'image4', !empty($_FILES['image4']['name']));

        // Other form data
        $id = $_POST["id8"];
        $servicename = htmlspecialchars($conn->real_escape_string($_POST["servicename"]));
        $serviceheading = $conn->real_escape_string($_POST["serviceheading"]);
        $servicedescription = $conn->real_escape_string($_POST["servicedescription"]);
        $servicedetails = $conn->real_escape_string($_POST["content"]);

        // Update query
        $sql = "UPDATE service SET servicesp_name='$servicename', services_heading='$serviceheading', services_description='$servicedescription', services_details='$servicedetails'";

        if ($new_file_name1 !== false) {
            $sql .= ", image1='$new_file_name1'";
        }
        if ($new_file_name2 !== false) {
            $sql .= ", image2='$new_file_name2'";
        }
        if ($new_file_name3 !== false) {
            $sql .= ", image3='$new_file_name3'";
        }
        if ($new_file_name4 !== false) {
            $sql .= ", image4='$new_file_name4'";
        }
        $sql .= " WHERE id='$id'";
        // Execute the update query
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                $(document).ready(function(){
                toastr.success('Form submitted successfully');
                setTimeout(function(){
                window.location.href = 'servicesconformity.php';
                }, 2000); // 2000 milliseconds = 2 seconds
                });
            </script>";
        } else {
            echo "Error updating record: " . $conn->error;
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
</body>

</html>