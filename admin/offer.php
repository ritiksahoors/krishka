
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utkalikart | Category</title>
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
                            <h3 class="home_color">Offers</h3>
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
                                        <th class="text-center">Offer Name</th>
                                        <th class="text-center">Offer Code</th>
                                        <th class="text-center">Offer Discount</th>
                                        <th class="text-center">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include 'conn.php';
                                    $sql = "SELECT * FROM offer";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td class="serial-no text-center"></td>
                                            <td class="text-center"><?php echo $row['offer_nm']; ?></td>
                                            <td class="text-center"><?php echo $row['offer_code']; ?></td>
                                            <td class="text-center"><?php echo $row['discount']; ?></td>
                                            <td class=text-center>
                                                <?php
                                                $status = $row['status'];
                                                $idm = $row['id'];
                                                $tb = 'offer';
                                                $tbc = 'id';
                                                $tbc1 = 'status';
                                                $returnpage = 'offer';
                                                if ($status == 1) {
                                                    echo "<a href='active?status=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-success btn-sm' onclick='return confirmAction(\"active\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Active'>
                                                    <i class='fas fa-unlock'></i></a>";
                                                } else {
                                                    echo "<a href='inactive?status0=$idm&tb=$tb&tbc=$tbc&tbc1=$tbc1&returnpage=$returnpage' class='btn btn-danger btn-sm' onclick='return confirmAction(\"inactive\", $idm, \"$tb\", \"$tbc\", \"$tbc1\", \"$returnpage\")'title='Inactive'>
                                                    <i class='fas fa-lock'></i></a>";
                                                }
                                                ?>
                                                <button type="button" name="update3" class="btn btn-primary btn-sm m-2"
                                                    onclick="myfcn6(<?php echo $row['id']; ?>,'<?php echo $row['offer_nm']; ?>','<?php echo $row['offer_code']; ?>','<?php echo $row['discount']; ?>')"
                                                    data-toggle="modal" data-target="#updatedecategory" title="Edit"
                                                    aria-hidden="true">
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                                <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='offer', tbc='id', returnpage='offer');"
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
                                        <th class="text-center">Offer Name</th>
                                        <th class="text-center">Offer Code</th>
                                        <th class="text-center">Offer Discount</th>
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
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Offer Name:</label>
                                <input type="text" class="form-control" name="offername" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Offer Code:</label>
                                <input type="text" class="form-control" name="offercode" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Discount:</label>
                                <input type="text" class="form-control" name="discount" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="offer_insert" class="btn btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['offer_insert'])) {
    include 'conn.php';
    $offername = htmlspecialchars($_POST["offername"]);
    $offercode = htmlspecialchars($_POST["offercode"]);
    $discount = htmlspecialchars($_POST["discount"]);
    $sql = "INSERT INTO offer (offer_nm, offer_code, discount, status) VALUES ('$offername', '$offercode', '$discount', '1')";
    if ($conn->query($sql) === true) {
        echo "<script>
                            $(document).ready(function(){
                            toastr.success('Form submitted successfully');
                            setTimeout(function(){
                            window.location.href = 'offer';
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
                <h4 class="modal-title text-white">Category</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post' enctype="multipart/form-data">
                <div class="modal-body p-4">
                    <input type="hidden" name="id6" id="id6">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Offer Name:</label>
                                <input type="text" class="form-control" id="offer_name" name="offername" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Offer Code:</label>
                                <input type="text" class="form-control" id="offer_id" name="offercode" required>
                            </div>
                            <div class="form-group col-12">
                                <label for="exampleInputcname">Discount:</label>
                                <input type="text" class="form-control" id="offer_dis" name="discount" required>
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
    $offername = htmlspecialchars($_POST["offername"]);
    $offercode = htmlspecialchars($_POST["offercode"]);
    $discount = htmlspecialchars($_POST["discount"]);
    $id = $_POST["id6"];
    $sql1 = "UPDATE offer SET offer_nm='$offername', offer_code='$offercode', discount='$discount' WHERE id='$id'";
    if ($conn->query($sql1) === true) {
        echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'offer';
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

</html>