
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Utkalikart | Home</title>
<link href="dist/img/titleimage1.png" rel="icon">
<style>
    body {
        overflow-x: hidden;
    }
</style>
<?php include 'common/navbar.php'; ?>
<!-- Main Sidebar Container -->
<?php include 'common/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 home_color">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Count enquiry row -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-olive">
                        <div class="inner">
                            <div class="row">
                                <div class="col-6">
                                    <p>Products Enquiry</p>
                                    <?php
                                    include 'conn.php';
                                    if ($conn) {
                                        $query = "SELECT COUNT(*) as rowCount FROM enquiry WHERE service_name = ''";
                                        $result = mysqli_query($conn, $query);

                                        if ($result) {
                                            $row = mysqli_fetch_assoc($result);
                                            echo isset($row['rowCount']) ? $row['rowCount'] : 0;
                                        } else {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        }

                                        mysqli_close($conn);
                                    } else {
                                        echo "Error connecting to the database: " . mysqli_connect_error();
                                    }
                                    ?>
                                </div>
                                <div class="col-6">
                                    <p>Services Enquiry</p>
                                    <?php
                                    include 'conn.php';
                                    if ($conn) {
                                        $query = "SELECT COUNT(*) as rowCount FROM enquiry WHERE product_code IS NULL";
                                        $result = mysqli_query($conn, $query);
                                        if ($result) {
                                            $row = mysqli_fetch_assoc($result);
                                            echo isset($row['rowCount']) ? $row['rowCount'] : 0;
                                        } else {
                                            echo "Error executing query: " . mysqli_error($conn);
                                        }
                                        mysqli_close($conn);
                                    } else {
                                        echo "Error connecting to the database.";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Count contact row -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <p>Contact Us</p>
                            <?php
                            include 'conn.php';
                            if ($conn) {
                                $query = "SELECT COUNT(*) as rowCount FROM contact_us";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    echo isset($row['rowCount']) ? $row['rowCount'] : 0;
                                } else {
                                    echo "Error executing query: " . mysqli_error($conn);
                                }
                                mysqli_close($conn);
                            } else {
                                echo "Error connecting to the database.";
                            }
                            ?>
                        </div>
                        <!-- <div class="icon">
                            <i class="fab fa-product-hunt"></i>
                        </div> -->
                        <a href="contact.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Count product row -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <p>Products</p>
                            <?php
                            include 'conn.php';
                            if ($conn) {
                                $query = "SELECT COUNT(*) as rowCount FROM product";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    echo isset($row['rowCount']) ? $row['rowCount'] : 0;
                                } else {
                                    echo "Error executing query: " . mysqli_error($conn);
                                }
                                mysqli_close($conn);
                            } else {
                                echo "Error connecting to the database.";
                            }
                            ?>
                        </div>
                        <!-- <div class="icon">
                            <i class="fa fa-address-card"></i>
                        </div> -->
                        <a href="product.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- Count newsletter row -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <p>Newsletter</p>
                            <?php
                            include 'conn.php';
                            if ($conn) {
                                $query = "SELECT COUNT(*) as rowCount FROM newsletter";
                                $result = mysqli_query($conn, $query);
                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    echo isset($row['rowCount']) ? $row['rowCount'] : 0;
                                } else {
                                    echo "Error executing query: " . mysqli_error($conn);
                                }
                                mysqli_close($conn);
                            } else {
                                echo "Error connecting to the database.";
                            }
                            ?>
                        </div>
                        <!-- <div class="icon">
                            <i class="fa fa-address-card"></i>
                        </div> -->
                        <a href="newsletter.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
    </section>

    <div class="row">
        <div class="col-6">
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="home_color">Enquiry Of Products</h3>
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
                                <th class="text-center">Product Code</th>
                                <th class="text-center">Location</th>
                                <th class="text-center">Date Of Enquiry</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'conn.php';
                            $sql = "SELECT * FROM enquiry WHERE service_name = '' ORDER BY id DESC LIMIT 10;";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td class="serial-no text-center"></td>
                                    <td class="text-center"><?php echo $row['enquiry_name']; ?></td>
                                    <td class="text-center"><?php echo $row['enquiry_email']; ?></td>
                                    <td class="text-center"><?php echo $row['enquiry_wp_num']; ?></td>
                                    <td class="text-center"><?php echo $row['enquiry_mobile_num']; ?></td>
                                    <?php
                                    include 'conn.php';
                                    $product_code = $conn->real_escape_string($row['product_code']);
                                    $sql1 = "SELECT * FROM product WHERE product_code='$product_code'";
                                    $result1 = $conn->query($sql1);
                                    if ($result1->num_rows > 0) {
                                        while ($row1 = $result1->fetch_assoc()) {
                                            ?>
                                            <td class="text-center">
                                                <?php
                                                echo $row1['product_name'];
                                                echo " (";
                                                echo $row1['product_code'];
                                                echo ")";
                                                ?>
                                            </td>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <td class="text-center"><?php echo $row['enquiry_loc']; ?></td>
                                    <td class="text-center"><?php echo $row['date_of_enquiry']; ?></td>
                                    <td class="text-center">
                                        <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='enquiry', tbc='id', returnpage='index.php');"
                                            title="Delete">
                                            <i class="fas fa-trash-alt btn btn-danger btn-sm" aria-hidden="true"></i>
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
                                <th class="text-center">Product Code</th>
                                <th class="text-center">Location</th>
                                <th class="text-center">Date Of Enquiry</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- for service table -->
        <div class="col-6">
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="home_color">Enquiry Of Services</h3>
                </div>
                <div class="card-body">
                    <table id="example3" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Sl.No</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email Id</th>
                                <th class="text-center">Whatsapp Number</th>
                                <th class="text-center">Mobile Number</th>
                                <th class="text-center">Service Name</th>
                                <th class="text-center">Location</th>
                                <th class="text-center">Date Of Enquiry</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'conn.php';
                            $sql = "SELECT * FROM enquiry WHERE product_code IS NULL LIMIT 10;";
                            $result = $conn->query($sql);
                            $i = 1;
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $i;
                                    $i++; ?></td>
                                    <td class="text-center"><?php echo $row['enquiry_name']; ?></td>
                                    <td class="text-center"><?php echo $row['enquiry_email']; ?></td>
                                    <td class="text-center"><?php echo $row['enquiry_wp_num']; ?></td>
                                    <td class="text-center"><?php echo $row['enquiry_mobile_num']; ?></td>
                                    <td class="text-center"><?php echo $row['service_name']; ?></td>
                                    <td class="text-center"><?php echo $row['enquiry_loc']; ?></td>
                                    <td class="text-center"><?php echo $row['date_of_enquiry']; ?></td>
                                    <td class="text-center">
                                        <a onclick="confirmDelete(<?php echo $row['id']; ?>, tb='enquiry', tbc='id', returnpage='index.php');"
                                            title="Delete">
                                            <i class="fas fa-trash-alt btn btn-danger btn-sm" aria-hidden="true"></i>
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
                                <th class="text-center">Service Name</th>
                                <th class="text-center">Location</th>
                                <th class="text-center">Date Of Enquiry</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
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
<?php include 'common/footer.php'; ?>
</body>

</html>