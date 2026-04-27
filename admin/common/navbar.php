<?php
// $sql119 = "SELECT id FROM sub_subcategory";
//  $result119 = $conn->query($sql119);
//  while ($row119 = $result119->fetch_assoc()) {
//  $id119 = $row119['id'];
//  $sql111 = "SELECT sub_subcategory_id FROM product WHERE sub_subcategory_id= '$id119' AND status = '1'";
//  $result111 = $conn->query($sql111);
//  if ($result111->num_rows == 0) {
//  $sql113 = "UPDATE sub_subcategory SET status='0' WHERE id= '$id119'";
//  if ($conn->query($sql113) === TRUE) {
//      // echo "success";
//  } else {
//  echo "Error updating record: " . $conn->error;
//  }
//  }
//  else{
//     $sql114 = "UPDATE sub_subcategory SET status='1' WHERE id= '$id119'";
//     if ($conn->query($sql114) === TRUE) {
//      // echo "success";
//  } else {
//  echo "Error updating record: " . $conn->error;
//  }
//  }
//  }


// $sql116 = "SELECT id FROM sub_category";
// $result116 = $conn->query($sql116);
// while ($row116 = $result116->fetch_assoc()) {
// $id116 = $row116['id'];
// $sql117 = "SELECT sub_category_id FROM product WHERE sub_category_id= '$id116' AND status = '1'";
// $result117 = $conn->query($sql117);
// if ($result117->num_rows == 0) {
// $sql118 = "UPDATE sub_category SET status='0' WHERE id= '$id116'";
// if ($conn->query($sql118) === TRUE) {
//     // echo "success";
// } else {
// echo "Error updating record: " . $conn->error;
// }
// }
// else{
//    $sql119 = "UPDATE sub_category SET status='1' WHERE id= '$id116'";
//    if ($conn->query($sql119) === TRUE) {
//     // echo "success";
// } else {
// echo "Error updating record: " . $conn->error;
// }
// }
// }

// $sqlaa = "SELECT id FROM category";
// $resultaa = $conn->query($sqlaa);
// while ($rowaa = $resultaa->fetch_assoc()) {
// $idee = $rowaa['id'];
// $sql115 = "SELECT category_id FROM sub_category WHERE category_id= '$idee' AND status = '1'";
// $result115 = $conn->query($sql115);
// if ($result115->num_rows == 0) {
// $sqlUpdate = "UPDATE category SET status ='0' WHERE id = '$idee'";
// if ($conn->query($sqlUpdate) === TRUE) {
// // echo "success";
// } else {
// echo "Error updating record: " . $conn->error;
// }
// }
// else{
//    $sql120 = "UPDATE category SET status='1' WHERE id= '$idee'";
//    if ($conn->query($sql120) === TRUE) {
//     // echo "success";
// } else {
// echo "Error updating record: " . $conn->error;
// }
// }
// }
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=<?php echo time(); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/style.css?v=<?php echo time(); ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" role="button">
                        <img src="dist/img/logout1.png" alt="Logout" style="height: 30px;">
                    </a>
                </li>
            </ul>
            <!-- Right navbar links -->
        </nav>
    </div>