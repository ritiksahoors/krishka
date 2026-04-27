
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indus-Supply | Product</title>
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
                            <h3 class="home_color">Products</h3>
                            <a href="addproduct" class="ml-auto">
                                <button type="button" class="btn btn-success">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Add
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Sl.No</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Category</th>
                                        <th class="text-center">Sub-Category</th>
                                        <th class="text-center">Sub-Sub-Category</th>
                                        <th class="text-center">Product Price</th>
                                        <th class="text-center">Product Code</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM product ORDER BY id DESC";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><?php echo $row['product_name']; ?></td>
                                            <td class="text-center">
                                                <?php
                                                $category_id = $row["category_id"];
                                                $sql1 = "SELECT * FROM category WHERE id = $category_id";
                                                $result1 = $conn->query($sql1);
                                                $row1 = $result1->fetch_assoc();
                                                echo $row1["category_name"];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $subcategory_id = $row["sub_category_id"];
                                                $sql2 = "SELECT * FROM sub_category WHERE id = $subcategory_id";
                                                $result2 = $conn->query($sql2);
                                                $row2 = $result2->fetch_assoc();
                                                echo $row2["sub_category_name"];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $sub_subcategory_id = $row["sub_subcategory_id"];
                                                $sql3 = "SELECT * FROM sub_subcategory WHERE id = $sub_subcategory_id";
                                                $result3 = $conn->query($sql3);
                                                $row3 = $result3->fetch_assoc();
                                                echo $row3["sub_subcategoryname"];
                                                ?>
                                            </td>
                                            <td class="text-center"><?php echo $row['product_price']; ?></td>
                                            <td class="text-center"><?php echo $row['product_code']; ?></td>
                                            <td class="text-center resize">
                                                <a
                                                    href="viewproduct?id=<?php echo urlencode(base64_encode($row['id'])); ?>">
                                                    <i class="fas fa-eye btn btn-secondary btn-sm m-2" title="View"
                                                        aria-hidden="true"></i>
                                                </a>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'product';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'product';
                                                $extra = $row['sub_subcategory_id'];

                                                if ($status == 1) {
                                                    echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\", \"$extra\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\", \"$extra\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <a href="updateproduct?id=<?php echo urlencode(base64_encode($row['id'])); ?>"
                                                    class="btn btn-primary btn-sm m-2" title="Edit" aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </a>
                                                <?php
                                                $status = $row['stock'];
                                                $idm = $row['id'];
                                                $tb = 'product';
                                                $tbc = 'id';
                                                $tbc1 = 'stock';
                                                $returnpage = 'product.php';
                                                $extra = $row['sub_subcategory_id'];
                                                if ($status == 1) {
                                                    echo "<a href='active.php?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-info btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\", \"$extra\")'title='Active'>
                                                    <i class='fa fa-check-circle'></i></a>";
                                                } else {
                                                    echo "<a href='inactive.php?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\", \"$extra\")'title='Inactive'>
                                                    <i class='fa fa-times-circle'></i></a>";
                                                }
                                                ?>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='product', tbc='id', returnpage='product.php');"
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
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Category</th>
                                        <th class="text-center">Sub-Category</th>
                                        <th class="text-center">Sub-Sub-Category</th>
                                        <th class="text-center">Product Price</th>
                                        <th class="text-center">Product Code</th>
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