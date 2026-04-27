
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utkalikart | Product</title>
    <link href="dist/img/titleimage1.png" rel="icon">
</head>
<?php include 'common/navbar.php'; ?>
<!-- Main Sidebar Container -->
<?php include 'common/sidebar.php'; ?>
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
                                        <th class="text-center">Action</th>
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
                                            <td class="text-center"><?php echo $row['pro_name']; ?></td>
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

                                                if (empty($sub_subcategory_id) || $sub_subcategory_id == 0) {
                                                    echo "NULL";
                                                } else {
                                                    $sql3 = "SELECT sub_subcategoryname FROM sub_subcategory WHERE id = $sub_subcategory_id";
                                                    $result3 = $conn->query($sql3);
                                                    if ($result3 && $result3->num_rows > 0) {
                                                        $row3 = $result3->fetch_assoc();
                                                        echo $row3["sub_subcategoryname"];
                                                    } else {
                                                        echo "NULL";
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td class="text-center"><?php echo $row['product_price']; ?></td>
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
                                                $status = $row['stockk'];
                                                $idm = $row['id'];
                                                $tb = 'stockk';
                                                $tbc = 'id';
                                                $tbc1 = 'stockk';
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
                                        <th class="text-center">Action</th>
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

</html>