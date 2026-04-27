<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utkalikart | Profile</title>
    <link href="dist/img/titleimage1.png" rel="icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                                <p>Sub_Subcategories</p>
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
                            <a href="metatags" class="nav-link">
                                <i class="fa fa-address-card nav-icon"></i>
                                <p>Meta Tags</p>
                                <i class="right fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="profile" class="nav-link active">
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
                        <div class="card-header">
                            <h3 class="home_color">Profile</h3>
                        </div>
                        <div class="container-fluid pt-4 px-4" style="min-height: 450px;">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="bg-light rounded p-4">
                                        <?php
                                        $sql = "SELECT * FROM login where id = $userid ";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <div class="text-center">
                                                <img src="upload/<?php echo $row['image'] ?>" class="w-100" alt="No Image"
                                                    height="200" style="border-radius: 50%;">
                                                <h5 class="mt-3">User Name:-<?php echo $row['username'] ?></h5>
                                                <p class="mt-3">User Email:-<?php echo $row['email'] ?></p>
                                                <p class="mt-3">User Mobile:-<?php echo $row['phone'] ?></p>
                                            </div>
                                        <?php } ?>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-success" data-toggle="modal"
                                                data-target="#changePasswordModal">Change Password</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="bg-light rounded p-4 mb-3">
                                        <?php
                                        $sql2 = "SELECT * FROM login where id = $userid";
                                        $result2 = mysqli_query($conn, $sql2);
                                        while ($row = mysqli_fetch_assoc($result2)) {
                                            ?>
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                                method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <input type="hidden" name="csid" value="<?php echo $row['id'] ?>">
                                                    <div class="col-lg-12 form-group mb-4">
                                                        <label for="adminname">Name:</label>
                                                        <input type="text" name="adminname" class="form-control"
                                                            id="adminname" value="<?php echo $row['username'] ?>"
                                                            placeholder="Admin Name">
                                                    </div>
                                                    <div class="col-lg-12 form-group mb-4">
                                                        <label for="adminemail">Email:</label>
                                                        <input type="email" class="form-control" name="adminemail"
                                                            id="adminemail" value="<?php echo $row['email'] ?>"
                                                            placeholder="Admin Email Id"
                                                            pattern="^[a-zA-Z0-9]{2,30}@[a-zA-Z0-9]{2,10}.(es|com|in|org)$">
                                                    </div>
                                                    <div class="col-lg-12 form-group mb-4">
                                                        <label for="admintel">Contact No:</label>
                                                        <input type="tel" class="form-control" name="admintel" id="admintel"
                                                            value="<?php echo $row['phone'] ?>"
                                                            placeholder="Admin Contact No" maxlength="13"
                                                            pattern="[0-9\+]{10}">
                                                    </div>
                                                    <div class="col-lg-12 form-group mb-4">
                                                        <label for="adminimg">Image:</label>
                                                        <input type="file" class="form-control" name="adminimg"
                                                            id="adminimg" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="text-center mt-3">
                                                    <input type="submit" name="adminsubmit" class="btn btn-success"
                                                        value="Save">
                                                </div>
                                            </form>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'common/footer.php'; ?>
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="changePasswordModalLabel">Change Password</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="changePasswordForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="currentPassword">Current Password:</label>
                        <input type="password" class="form-control" id="currentPassword" name="currentPassword"
                            required>
                        <i class="fa fa-eye toggle-password" data-target="#currentPassword"
                            style="cursor: pointer; position: absolute; right: 25px; top: 60px;"></i>
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New Password:</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                        <i class="fa fa-eye toggle-password" data-target="#newPassword"
                            style="cursor: pointer; position: absolute; right: 25px; top: 145px;"></i>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm New Password:</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                            required>
                        <i class="fa fa-eye toggle-password" data-target="#confirmPassword"
                            style="cursor: pointer; position: absolute; right: 25px; top: 230px;"></i>
                    </div>
                    <div id="passwordError" class="text-danger"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="changePassword">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#changePasswordForm').submit(function (e) {
            var newPassword = $('#newPassword').val();
            var confirmPassword = $('#confirmPassword').val();
            if (newPassword !== confirmPassword) {
                $('#passwordError').html('New Password and Confirm New Password do not match');
                e.preventDefault();
            }
        });

        $(".toggle-password").click(function () {
            var input = $($(this).data("target"));
            var icon = $(this);
            if (input.attr("type") === "password") {
                input.attr("type", "text");
                icon.removeClass("fa-eye").addClass("fa-eye-slash");
            } else {
                input.attr("type", "password");
                icon.removeClass("fa-eye-slash").addClass("fa-eye");
            }
        });
    });
</script>
<?php

if (isset($_POST['changePassword'])) {
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Verify current password with database
    $sql = "SELECT password FROM login WHERE id = $userid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $storedPassword = $row['password'];

    if (password_verify($currentPassword, $storedPassword)) {
        // Current password is correct
        if ($newPassword === $confirmPassword) {
            // Update password in database
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updateSql = "UPDATE login SET password = '$hashedPassword' WHERE id = $userid";
            if (mysqli_query($conn, $updateSql)) {
                echo "<script>alert('Password changed successfully');</script>";
            } else {
                echo "Error updating password: " . mysqli_error($conn);
            }
        } else {
            echo "<script>alert('New passwords do not match');</script>";
        }
    } else {
        echo "<script>alert('Incorrect current password');</script>";
    }
}
?>

<?php
if (isset($_POST['adminsubmit'])) {
    include 'conn.php';
    // Get form 
    $id = mysqli_real_escape_string($conn, $_POST['csid']);
    $name = mysqli_real_escape_string($conn, $_POST['adminname']);
    $email = mysqli_real_escape_string($conn, $_POST['adminemail']);
    $tel = mysqli_real_escape_string($conn, $_POST['admintel']);
    // Get image data
    $image_name = $_FILES['adminimg']['name'];
    $image_size = $_FILES['adminimg']['size'];
    $image_tmp = $_FILES['adminimg']['tmp_name'];
    $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
    $new_file_name = uniqid() . '.' . $file_type;
    if ($image_name != "") {
        // Set upload directory
        $upload_dir = "upload/";

        $sql_previous_image = "SELECT image FROM login where id = $userid";
        $result1 = $conn->query($sql_previous_image);
        if ($result1->num_rows > 0) {
            $row1 = $result1->fetch_assoc();
            $previous_image = $upload_dir . $row1['image'];

            // Delete previous photo from the upload folder
            if (file_exists($previous_image)) {
                unlink($previous_image);
            }
        }
        // Move uploaded image to directory
        $target_file = $upload_dir . $new_file_name;
        if (move_uploaded_file($image_tmp, $target_file)) {
            //echo "Image uploaded successfully!";
        } else {
            echo "Error uploading image!";
        }
        $sql = "UPDATE login SET username='$name',email = '$email', phone='$tel', image='$new_file_name' WHERE id=$id";
    } else {
        $sql = "UPDATE login SET username='$name',email = '$email', phone='$tel' WHERE id=$id";
    }
    if (mysqli_query($conn, $sql)) {
        echo "<script>window.location.href='profile.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Close database connection
mysqli_close($conn);
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

</html>