<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishika Collections | Sub-subcategory</title>
    <link href="dist/img/titleimage1.jpeg" rel="icon">
    <!-- toaster -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <h3 class="home_color">Sub-SubCategories</h3>
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
                                        <th class="text-center">Sub-subcategory Name</th>
                                        <th class="text-center">Subcategory Name</th>
                                        <th class="text-center">Category Name</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM sub_subcategory";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><?php echo $row['sub_subcategoryname']; ?></td>
                                            <td class="text-center">
                                                <?php
                                                $sub_category_id = $row["sub_category_id"];
                                                $sql1 = "SELECT * FROM sub_category WHERE id = $sub_category_id";
                                                $result1 = $conn->query($sql1);
                                                $row1 = $result1->fetch_assoc();
                                                echo $row1["sub_category_name"];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $category_id = $row["category_id"];
                                                $sql2 = "SELECT * FROM category WHERE id = $category_id";
                                                $result2 = $conn->query($sql2);
                                                $row2 = $result2->fetch_assoc();
                                                echo $row2["category_name"];
                                                ?>
                                            </td>
                                            <td class=text-center>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'sub_subcategory';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'sub_subcategory';
                                                $extra = $row['sub_category_id'];
                                                if ($status == 1) {
                                                    echo "<a href='active?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\", \"$extra\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\", \"$extra\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update1" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn5(<?php echo $row['id']; ?>,'<?php echo $row['sub_subcategoryname']; ?>','<?php echo $row['sub_category_id']; ?>','<?php echo $row['category_id']; ?>')"
                                                    data-toggle="modal" data-target="#updatede_sub_subcategory" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>

                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='sub_subcategory', tbc='id', returnpage='sub_subcategory');"
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
                                        <th class="text-center">Sub-subcategory Name</th>
                                        <th class="text-center">Subcategory Name</th>
                                        <th class="text-center">Category Name</th>
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
                <h4 class="modal-title text-white">Sub-Subcategory</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category-dropdown22">Category Name:</label>
                            <select class="form-control" name="value" id="category-dropdown22" required>
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
                        <div class="form-group">
                            <label for="sub-category-dropdown22">Sub-Category Name:</label>
                            <select class="form-control" name="valuee" id="sub-category-dropdown22" required>
                                <option value="">Select Sub-Category</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputcname">Sub-Subcategory Name:</label>
                            <input type="text" class="form-control" id="exampleInputcname" name="sub-subcategory"
                                required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="sub_subcategory_insert" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['sub_subcategory_insert'])) {
    include 'conn.php';
    $value = $_POST["value"];
    $valuee = $_POST["valuee"];
    $name = htmlspecialchars($_POST["sub-subcategory"]);
    $check_query = "SELECT * FROM sub_subcategory WHERE sub_subcategoryname = '$name' AND sub_category_id = '$value' AND category_id = '$valuee'";
    $result3 = $conn->query($check_query);

    if ($result3->num_rows > 0) {
        echo "<script>
                $(document).ready(function(){
                toastr.error('Sub-sub-category name already exists for this category');
                setTimeout(function(){
                window.location.href = 'sub_subcategory';
                }, 3000);
                });
            </script>";
    } else {
        $sql = "INSERT INTO sub_subcategory (sub_subcategoryname, category_id, sub_category_id,  status) VALUES ('$name','$value','$valuee','1')";
        if ($conn->query($sql) === true) {
            echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'sub_subcategory';
                    }, 2000); // 2000 milliseconds = 1 second
                    });
                </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();

}
?>
<!-- Update Modal -->
<div class="modal fade" data-backdrop="static" id="updatede_sub_subcategory">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Sub-Subcategory</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id89" id="id89">
                    <div class="form-group">
                        <label for="category_name2">Category Name:</label>
                        <select class="form-control" id="category_name2" name="category_name">
                            <option value="">Select Category</option>
                            <?php
                            $sql8 = "SELECT * FROM category";
                            $result8 = $conn->query($sql8);
                            while ($row8 = $result8->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row8["id"]; ?>">
                                    <?php echo htmlspecialchars($row8["category_name"], ENT_QUOTES, 'UTF-8'); ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="subcategoryname1">Sub_Category Name:</label>
                        <select class="form-control" id="subcategoryname1" name="sub_category_name">
                            <option value="">Select Sub_Category</option>
                            <?php
                            $sql7 = "SELECT * FROM sub_category";
                            $result7 = $conn->query($sql7);
                            while ($row7 = $result7->fetch_assoc()) {
                                ?>
                                <option value="<?php echo $row7["id"]; ?>">
                                    <?php echo htmlspecialchars($row7["sub_category_name"], ENT_QUOTES, 'UTF-8'); ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sub_subcategory">Sub-Subcategory Name:</label>
                        <input type="text" class="form-control" id="sub_subcategory" name="sub_subcategory_name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="sub_subcategory_update" value="submit"
                        class="btn btn-success">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['sub_subcategory_update'])) {
    include 'conn.php';
    $id = $_POST["id89"];
    $sub_subcategory_name = htmlspecialchars($_POST["sub_subcategory_name"]);
    $sub_category_name = htmlspecialchars($_POST["sub_category_name"]);
    $category_name = htmlspecialchars($_POST["category_name"]);

    $sql1 = "UPDATE sub_subcategory SET sub_subcategoryname='$sub_subcategory_name', sub_category_id='$sub_category_name', category_id='$category_name' WHERE id='$id'";
    if ($conn->query($sql1) == true) {
        echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'sub_subcategory';
                    }, 2000); // 2000 milliseconds = 2 second
                    });
                </script>";
    } else {
        echo $conn->error;
    }
    $conn->close();
}
?>
<?php include 'common/footer.php'; ?>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<!-- insert code of sub subcategory -->
<script>
    $(document).ready(function () {
        $('#category-dropdown22').on('change', function () {
            var category_id = this.value;
            $.ajax({
                url: "get_subcat_insert.php",
                type: "POST",
                data: {
                    category_id: category_id
                },
                cache: false,
                success: function (result) {
                    $("#sub-category-dropdown22").html(result);
                }
            });
        });
    });
</script>
<!-- update code of sub subcategory -->
<script>
    $(document).ready(function () {
        $('#category_name2').on('change', function () {
            var category_id = $(this).val();

            if (category_id !== '') {
                $.ajax({
                    url: "get_subsub_update.php",
                    type: "POST",
                    data: { category_id: category_id },
                    success: function (data) {
                        $('#subcategoryname1').html(data);
                    }
                });
            } else {
                $('#subcategoryname1').html('<option value="">Select Sub-Category</option>');
            }
        });
    });
</script>

</html>