
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indus-Supply | Folder</title>
    <link href="dist/img/titleimage.png" rel="icon">
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
                            <a href="product" class="nav-link active" id="catalogue-link">
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

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="home_color">Folder Name</h3>
                            <button type="button" class="btn btn-success ml-auto" data-toggle="modal"
                                data-target="#myModal">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add
                            </button>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">Folder Name</th>
                                        <th class="text-center">Folder Image</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM folder";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><?php echo $row['folder_name']; ?></td>
                                            <td class="text-center"><img
                                                    src="upload/catalogue/image/<?php echo $row['image']; ?>"
                                                    alt="profile image" width="50" height="50">
                                            </td>
                                            <td class=text-center>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'folder';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'folder.php';
                                                if ($status == 1) {
                                                    echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update6" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn6(<?php echo $row['id']; ?>,'<?php echo $row['folder_name']; ?>')"
                                                    data-toggle="modal" data-target="#updatefolder" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='folder', tbc='id', returnpage='folder.php');"
                                                    title="Delete">
                                                    <i class="fas fa-trash-alt btn btn-danger btn-sm"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">Folder Name</th>
                                        <th class="text-center">Folder Image</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Insert Modal -->
<div class="modal fade" data-backdrop="static" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Folder Name</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Folder Name:</label>
                                <input type="text" class="form-control" id="exampleInputcname" name="foldername"
                                    required>
                            </div>
                            <div class="form-group col-12">
                                <label for="image">Folder Image</label>
                                <input type="file" class="form-control" placeholder="" name="image" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="folder_insert" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['folder_insert'])) {
    include 'conn.php';
    // Sanitize and validate inputs
    $foldername = $conn->real_escape_string($_POST["foldername"]);
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
    $new_file_name = uniqid() . '.' . $file_type;
    $upload_dir = "upload/catalogue/image/";

    // Create upload directory if it doesn't exist
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true); // Ensure directory is writable
    }

    $target_file = $upload_dir . $new_file_name;

    // Move uploaded file to target directory
    if (move_uploaded_file($image_tmp, $target_file)) {
        // File upload success
        // echo "<script>
        //         $(document).ready(function(){
        //             toastr.success('Image Uploaded Successfully');
        //             setTimeout(function(){
        //                 window.location.href = 'folder.php';
        //             }, 2000); // 2000 milliseconds = 2 seconds
        //         });
        //     </script>";
    } else {
        // File upload error
        echo "<script>
                $(document).ready(function(){
                    toastr.error('Image Not Uploaded');
                    setTimeout(function(){
                        window.location.href = 'folder.php';
                    }, 2000); // 2000 milliseconds = 2 seconds
                });
            </script>";
    }

    // Insert into folder table
    $sql = "INSERT INTO folder (folder_name, image) VALUES ('$foldername', '$new_file_name')";
    if ($conn->query($sql) === true) {
        echo "<script>
                $(document).ready(function(){
                    toastr.success('Folder inserted successfully');
                    setTimeout(function(){
                        window.location.href = 'folder.php';
                    }, 2000); // 2000 milliseconds = 2 seconds
                });
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<!--Update Modal -->
<div class="modal fade" data-backdrop="static" id="updatefolder">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Folder Name</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id6" id="id6">
                    <div class="form-group">
                        <label for="text">Folder Name:</label>
                        <input type="text" class="form-control" id="folder_name" name="folder_name">
                    </div>
                    <div class="form-group">
                        <label for="image">Folder Image</label>
                        <input type="file" name="image" class="form-control" placeholder="image"
                            onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0])">
                        <img id="image2" src="dist/img/noimage1.png" alt="New image" width="50" height="50" />
                        <img src="#" id="image23" alt="Profile Image" width="50" height="50" class="mt-2 img-fluid">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="update7" value="submit" class="btn btn-success">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['update7'])) {
    include 'conn.php';
    $image_name = $_FILES['image']['name'];
    if ($image_name == NULL) {
        $name = $_POST["folder_name"];
        $id = $_POST["id6"];
        $sql1 = "UPDATE folder SET folder_name='$name' WHERE id='$id'";
        if ($conn->query($sql1) === true) {
            echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'folder.php';
                    }, 2000); // 2000 milliseconds = 1 second
                    });
                </script>";
        } else {
            echo $conn->error;
        }
        $conn->close();
    } else {
        $image_size = $_FILES['image']['size'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
        $new_file_name = uniqid() . '.' . $file_type;
        $upload_dir = "upload/catalogue/image/";

        // Retrieve the previous file name from the database
        $sql_previous_image = "SELECT image FROM folder WHERE id='$_POST[id6]'";
        $result = $conn->query($sql_previous_image);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $previous_image = $upload_dir . $row['image'];

            // Delete previous photo from the upload folder
            if (file_exists($previous_image)) {
                unlink($previous_image);
            }
        }
        $target_file = $upload_dir . $new_file_name;
        if (move_uploaded_file($image_tmp, $target_file)) {
            // Update the database with the new file name
            $id = $_POST["id6"];
            $name = $_POST["folder_name"];
            $sql1 = "UPDATE folder SET folder_name='$name', image='$new_file_name' WHERE id='$id'";
            if ($conn->query($sql1) == true) {
                echo "<script>window.location.href='folder.php';</script>";
            } else {
                echo $conn->error;
            }
            $conn->close();
        } else {
            echo "<script>alert('Image not uploaded');</script>";
        }
    }
}
?>
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

</html>