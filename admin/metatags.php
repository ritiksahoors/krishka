
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utkalikart | Meta Tags</title>
    <link href="dist/img/titleimage1.png" rel="icon">
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
            <h2 class="text-white incolor">UTKALIKART</h2>
        </a>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
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
                                <p>Categories</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="subcategory" class="nav-link">
                                <i class="fa fa-indent nav-icon"></i>
                                <p>Sub-Categories</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="sub_subcategory" class="nav-link">
                                <i class="fa fa-indent nav-icon"></i>
                                <p>Sub-Subcategories</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="product" class="nav-link">
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
                                <p>Product Enquiry</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="service_enquiry" class="nav-link">
                                <i class="fa fa-question-circle nav-icon"></i>
                                <p>Service Enquiry</p>
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
                            <a href="metatags" class="nav-link active">
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
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card table-size mt-3">
                        <div class="card-header">
                            <h3 class="home_color">Meta Tags</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">Meta Description</th>
                                        <th class="text-center">Keywords</th>
                                        <th class="text-center">Author</th>
                                        <th class="text-center">Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM metatag";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><?php echo $row['description']; ?></td>
                                            <td class="text-center"><?php echo $row['keywords']; ?></td>
                                            <td class="text-center"><?php echo $row['author']; ?></td>
                                            <td class=text-center>
                                                <button type="button" name="update9" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn9(<?php echo $row['id']; ?>, '<?php echo $row['description']; ?>', '<?php echo $row['keywords']; ?>', '<?php echo $row['author']; ?>')"
                                                    data-toggle="modal" data-target="#updatemetatag" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--Update Modal -->
<div class="modal fade" data-backdrop="static" id="updatemetatag">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Meta Tag</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <?php
                    include 'conn.php';
                    $sql = "SELECT * FROM metatag";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <input type="hidden" name="id9" id="id9">
                        <div class="form-group col-12">
                            <label for="metaadescription">Meta Description:</label>
                            <input type="text" class="form-control" id="metaadescription" name="metaadescription">
                        </div>
                        <div class="form-group col-12">
                            <label for="keywords1">Keywords:</label>
                            <input type="text" class="form-control" id="tag-input1" name="keywords1"
                                value="<?php echo $row["keywords"]; ?>" id="keywords1">
                        </div>
                        <div class="form-group col-12">
                            <label for="author">Author:</label>
                            <input type="text" class="form-control" id="author1" value="<?php echo $row["author"]; ?>"
                                name="authorr">
                        </div>
                    <?php } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="metatag_update" value="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
if (isset($_POST['metatag_update'])) {
    $id = $_POST['id9'];
    $metaadescription = $_POST['metaadescription'];
    $keywoords = $_POST['keywords1'];
    $author = $_POST['authorr'];

    $sql1 = "UPDATE metatag SET description='$metaadescription', keywords='$keywoords', author='$author' WHERE id='$id'";
    if ($conn->query($sql1) === true) {
        echo "<script>
                    $(document).ready(function(){
                        toastr.success('Form submitted successfully');
                        setTimeout(function(){
                            window.location.href = 'metatags.php';
                        }, 2000); // 2000 milliseconds = 2 second
                    });
                </script>";
    } else {
        echo $conn->error;
    }
    $conn->close();
}
?>

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
<?php include 'common/footer.php'; ?>

</html>