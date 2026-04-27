<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utkalikart | Trending Reels</title>
    <link href="dist/img/titleimage1.png" rel="icon">
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
                            <h3 class="home_color">Trending Reels</h3>
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
                                        <th class="text-center">Video</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM reels_tb";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center">
                                                <video width="80" height="50" controls>
                                                    <source src="upload/reels/<?php echo $row['pro_vdo']; ?>"
                                                        type="video/mp4">
                                                </video>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $row['pro_nm']; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $row['pro_price']; ?>
                                            </td>
                                            <td class=text-center>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'reels_tb';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'reels';
                                                if ($status == 1) {
                                                    echo "<a href='active?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update3" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn11(<?php echo $row['id']; ?>,'<?php echo $row['pro_vdo']; ?>','<?php echo $row['pro_nm']; ?>','<?php echo $row['pro_price']; ?>')"
                                                    data-toggle="modal" data-target="#updatedecategory" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='reels_tb', tbc='id', returnpage='reels');"
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
                                        <th class="text-center">Video</th>
                                        <th class="text-center">Product Name</th>
                                        <th class="text-center">Price</th>
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
                <h4 class="modal-title text-white">Trending Reels</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">

                            <div class="form-group col-6">
                                <label>Image / Video:</label>
                                <input type="file" class="form-control" name="occ_img"
                                    accept="image/jpeg,image/png,image/jpg,video/mp4" onchange="previewMedia(event)"
                                    required>

                                <img id="image100" src="dist/img/noimage1.png" width="50" height="50">
                                <video id="video100" width="80" controls style="display:none"></video>
                            </div>
                            <div class="form-group col-6">
                                <label>Product Name:</label>
                                <input type="text" class="form-control" name="proo_name" required>
                            </div>
                            <div class="form-group col-6">
                                <label>Price:</label>
                                <input type="text" class="form-control" name="proo_pricee" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="coupon_insert" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['coupon_insert'])) {
    include 'conn.php';
    $proo_name = htmlspecialchars($_POST['proo_name']);
    $proo_pricee = htmlspecialchars($_POST['proo_pricee']);

    if (!isset($_FILES['occ_img']) || $_FILES['occ_img']['error'] != 0) {
        die("File upload error");
    }

    $file_name = $_FILES['occ_img']['name'];
    $file_tmp = $_FILES['occ_img']['tmp_name'];
    $file_size = $_FILES['occ_img']['size'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // Allowed formats
    $allowed = ['jpg', 'jpeg', 'png', 'mp4'];

    if (!in_array($file_ext, $allowed)) {
        die("Invalid file type");
    }

    // Size limit (15MB)
    if ($file_size > 15 * 1024 * 1024) {
        die("File too large");
    }

    // Upload directory
    $upload_dir = "upload/reels/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $new_file_name = uniqid() . '.' . $file_ext;
    $target_file = $upload_dir . $new_file_name;

    if (move_uploaded_file($file_tmp, $target_file)) {

        $sql = "INSERT INTO reels_tb (pro_vdo, pro_nm, pro_price, status)
                VALUES ('$new_file_name', '$proo_name', '$proo_pricee', '1')";

        if ($conn->query($sql)) {
            echo "<script>
                $(document).ready(function(){
                    toastr.success('Occasion added successfully');
                    setTimeout(function(){
                        window.location.href='reels';
                    },2000);
                });
            </script>";
        } else {
            echo $conn->error;
        }

    } else {
        echo "Upload failed";
    }
    $conn->close();
}
?>

<!--Update Modal -->
<div class="modal fade" data-backdrop="static" id="updatedecategory">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Trending Reels</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id11" id="id11">
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Image / Video:</label>
                            <input type="file" class="form-control" name="occ_img"
                                accept="image/jpeg,image/png,image/jpg,video/mp4" onchange="previewOccasion(this)">
                            <img id="occ_img_preview" width="60" height="60" style="display:none;">
                            <video id="occ_video_preview" width="80" controls style="display:none;"></video>
                        </div>
                        <div class="form-group col-6">
                            <label>Product Name:</label>
                            <input type="text" class="form-control" name="pro_name1" id="pro_name12" required>
                        </div>
                        <div class="form-group col-6">
                            <label>Product Price:</label>
                            <input type="text" class="form-control" name="pro_pro1" id="pro_pro12" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="coupon_update" class="btn btn-success">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['coupon_update'])) {
    include 'conn.php';

    $id = $_POST['id11'];
    $pro_name1 = htmlspecialchars($_POST['pro_name1']);
    $pro_pro1 = htmlspecialchars($_POST['pro_pro1']);

    if (!empty($_FILES['occ_img']['name'])) {

        $file_name = $_FILES['occ_img']['name'];
        $file_tmp = $_FILES['occ_img']['tmp_name'];
        $file_size = $_FILES['occ_img']['size'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $allowed = ['jpg', 'jpeg', 'png', 'mp4'];
        if (!in_array($file_ext, $allowed)) {
            die("Invalid file type");
        }

        // Size limit (15MB)
        if ($file_size > 15 * 1024 * 1024) {
            die("File too large");
        }

        $upload_dir = "upload/reels/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        // DELETE OLD FILE
        $old = $conn->query("SELECT pro_vdo FROM reels_tb WHERE id='$id'");
        if ($old->num_rows > 0) {
            $old_file = $old->fetch_assoc()['pro_vdo'];
            if (!empty($old_file) && file_exists($upload_dir . $old_file)) {
                unlink($upload_dir . $old_file);
            }
        }

        $new_file_name = uniqid() . '.' . $file_ext;
        $target_file = $upload_dir . $new_file_name;

        if (move_uploaded_file($file_tmp, $target_file)) {

            $sql = "UPDATE reels_tb 
                    SET pro_vdo='$new_file_name', pro_nm='$pro_name1', pro_price='$pro_pro1' 
                    WHERE id='$id'";

            if ($conn->query($sql)) {
                successMsg();
            } else {
                echo $conn->error;
            }
        } else {
            echo "Upload failed";
        }

    } else {

        $sql = "UPDATE reels_tb SET pro_nm='$pro_name1', pro_price='$pro_pro1' WHERE id='$id'";
        if ($conn->query($sql)) {
            successMsg();
        } else {
            echo $conn->error;
        }
    }

    $conn->close();
}

// SUCCESS MESSAGE
function successMsg()
{
    echo "<script>
        $(document).ready(function(){
            toastr.success('Occasion updated successfully');
            setTimeout(function(){
                window.location.href='reels';
            },2000);
        });
    </script>";
}
?>

<?php include 'common/footer.php'; ?>

</html>