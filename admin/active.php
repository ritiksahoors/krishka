<?php
include 'conn.php';
?>

<?php
$id = $_GET["status"];
$id1 = $_GET['tb'];
$id2 = $_GET['returnpage'];
$tbc1 = $_GET['tbc1'];

$sql1 = "UPDATE $id1 SET $tbc1='0' WHERE id='$id'";

if ($conn->query($sql1) == true) {
    //echo "success";
    header("location:$id2");
} else {
    $conn->error;
}
$conn->close();

?>