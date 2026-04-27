
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utkalikart | Price</title>
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
                            <h3 class="home_color">Price</h3>
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
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM price";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><img src="upload/pricee/<?php echo $row['image']; ?>"
                                                    alt="profile image" width="50" height="50">
                                            <td class="text-center">
                                                <?php echo $row['name']; ?>
                                            </td>
                                            <td class=text-center>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'price';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'price';
                                                if ($status == 1) {
                                                    echo "<a href='active?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update3" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn9(<?php echo $row['id']; ?>,'<?php echo $row['image']; ?>','<?php echo $row['name']; ?>')"
                                                    data-toggle="modal" data-target="#updatedecategory" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='price', tbc='id', returnpage='price');"
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
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Name</th>
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
                <h4 class="modal-title text-white">Offers</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="exampleInputcname">Price Image:</label>
                                <input type="file" class="form-control" name="pri_img"
                                    accept="image/jpeg, image/jpg, image/png"
                                    onchange="document.getElementById('image20').src = window.URL.createObjectURL(this.files[0])"
                                    required>
                                <img id="image20" src="dist/img/noimage1.png" alt="image" width="50" height="50" />
                            </div>
                            <div class="form-group col-6">
                                <label for="exampleInputcname">Price Name:</label>
                                <input type="text" class="form-control" id="exampleInputcname" name="Pri_nm" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="price_insert" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['price_insert'])) {
    include 'conn.php';
    function handleFileUpload($fieldName, $uploadDir)
    {
        global $conn;
        $image_name = $_FILES[$fieldName]['name'];
        $image_size = $_FILES[$fieldName]['size'];
        $image_tmp = $_FILES[$fieldName]['tmp_name'];
        $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
        $new_file_name = uniqid() . '.' . $file_type;

        // Ensure upload directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // Ensure directory is writable
        }

        $target_file = $uploadDir . $new_file_name;

        if (move_uploaded_file($image_tmp, $target_file)) {
            return $new_file_name; // Return the generated file name if upload succeeds
        } else {
            return null; // Return null if upload fails
        }
    }
    // File upload directory
    $upload_dir = "upload/pricee/";
    // Handle image uploads
    $new_file_name = handleFileUpload('pri_img', $upload_dir);
    $pri_name = htmlspecialchars($_POST["Pri_nm"]);
    $sql = "INSERT INTO price (image, name, status) VALUES ('$new_file_name', '$pri_name', '1')";
    if ($conn->query($sql) === true) {
        echo "<script>
                            $(document).ready(function(){
                            toastr.success('Form submitted successfully');
                            setTimeout(function(){
                            window.location.href = 'price';
                            }, 2000); // 2000 milliseconds = 1 second
                            });
                        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!--Update Modal -->
<div class="modal fade" data-backdrop="static" id="updatedecategory">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-white">Price</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id9" id="id9">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="exampleInputcname">Price Image:</label>
                                <input type="file" class="form-control" name="image" placeholder="image"
                                    accept="image/jpeg, image/jpg, image/png"
                                    onchange="document.getElementById('image21').src = window.URL.createObjectURL(this.files[0])">
                                <img id="image21" src="dist/img/noimage1.png" alt="image" width="50" height="50" />
                                <img id="price1_img" alt="image" width="50" height="50" />
                            </div>
                            <div class="form-group col-6">
                                <label for="text">Price Name:</label>
                                <input type="text" class="form-control" id="pricee_name" name="pricee1_name">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="update4" value="submit" class="btn btn-success">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST['update4'])) {
    include 'conn.php';

    $id = $_POST['id9'];
    $category_name = htmlspecialchars($_POST['pricee1_name']);
    $image_name = $_FILES['image']['name'];

    // If NO image uploaded
    if (empty($image_name)) {

        $sql = "UPDATE price SET name='$category_name' WHERE id='$id'";
        if ($conn->query($sql)) {
            echo successMsg();
        } else {
            echo $conn->error;
        }

    } else {

        // Image upload
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
        $file_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));

        // Allowed extensions
        $allowed = ['jpg', 'jpeg', 'png'];
        if (!in_array($file_ext, $allowed)) {
            echo "<script>alert('Invalid image type');</script>";
            exit;
        }

        $new_file_name = uniqid() . '.' . $file_ext;
        $upload_dir = "upload/pricee/";
        $target_file = $upload_dir . $new_file_name;

        if (move_uploaded_file($image_tmp, $target_file)) {

            $sql = "UPDATE price SET image='$new_file_name', name='$category_name' WHERE id='$id'";
            if ($conn->query($sql)) {
                echo successMsg();
            } else {
                echo $conn->error;
            }

        } else {
            echo "<script>alert('Image upload failed');</script>";
        }
    }

    $conn->close();
}

// Success message function
function successMsg()
{
    return "<script>
        $(document).ready(function(){
            toastr.success('Form updated successfully');
            setTimeout(function(){
                window.location.href = 'price';
            }, 2000);
        });
    </script>";
}
?>

<?php include 'common/footer.php'; ?>

</html>