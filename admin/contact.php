
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indus-Supply | Contact Us</title>
    <link href="dist/img/titleimage.png" rel="icon">
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
                            <a href="contact" class="nav-link active">
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
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-header">
                            <h3 class="home_color">Contact Us</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email Id</th>
                                        <th class="text-center">Whatsapp Number</th>
                                        <th class="text-center">Mobile Number</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">Date Of Contact</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM contact_us";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center">
                                                <?php echo htmlspecialchars($row['first_name'] . ' ' . $row['middle_name'] . ' ' . $row['last_name']); ?>
                                            </td>
                                            <td class="text-center"><?php echo htmlspecialchars($row['contact_email']); ?>
                                            </td>
                                            <td class="text-center"><?php echo htmlspecialchars($row['contact_wp_num']); ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo htmlspecialchars($row['contact_mobile_num']); ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo htmlspecialchars($row['contact_location']); ?>
                                            </td>
                                            <td class="text-center"><?php echo htmlspecialchars($row['date_of_contact']); ?>
                                            </td>
                                            <td class="text-center">
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='contact_us', tbc='id', returnpage='contact.php');"
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
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email Id</th>
                                        <th class="text-center">Whatsapp Number</th>
                                        <th class="text-center">Mobile Number</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">Date Of Contact</th>
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