<!DOCTYPE html>
<html>

<body>
    <?php
    include 'conn.php';
    $id = $_GET["status"];
    $id1 = $_GET['tb'];
    $id2 = $_GET['returnpage'];
    $tbc = $_GET['tbc'];
    $tbc1 = $_GET['tbc1'];

    if ($id1 == "category") {
        $sql1 = "UPDATE $id1 SET $tbc1='0' WHERE $tbc='$id'";
        $sql2 = "UPDATE sub_category SET $tbc1='0' WHERE category_id='$id'";
        $sql3 = "UPDATE sub_subcategory SET $tbc1='0' WHERE category_id='$id'";
        $sql4 = "UPDATE product SET $tbc1='0' WHERE category_id='$id'";

        if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE) {
            header("location:$id2");
        } else {
            echo $conn->error;
        }
    } elseif ($id1 == "sub_category") {
        $sql5 = "UPDATE $id1 SET $tbc1='0' WHERE $tbc='$id'";
        $sql6 = "UPDATE sub_subcategory SET $tbc1='0' WHERE sub_category_id='$id'";
        $sql7 = "UPDATE product SET $tbc1='0' WHERE sub_category_id='$id'";

        if ($conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE && $conn->query($sql7) === TRUE) {
            header("location:$id2");
        } else {
            echo $conn->error;
        }
    } elseif ($id1 == "sub_subcategory") {
        $sql8 = "UPDATE $id1 SET $tbc1='0' WHERE $tbc='$id'";
        $sql9 = "UPDATE product SET $tbc1='0' WHERE sub_subcategory_id='$id'";

        if ($conn->query($sql8) === TRUE && $conn->query($sql9) === TRUE) {
            $sqlaa = "SELECT id FROM category";
            $resultaa = $conn->query($sqlaa);
            while ($rowaa = $resultaa->fetch_assoc()) {
                $idee = $rowaa['id'];
                $sql115 = "SELECT category_id FROM sub_category WHERE category_id='$idee' AND status='1'";
                $result115 = $conn->query($sql115);
                if ($result115->num_rows == 0) {
                    $sqlUpdate = "UPDATE category SET status='0' WHERE id='$idee'";
                    if ($conn->query($sqlUpdate) !== TRUE) {
                        echo "Error updating record: " . $conn->error;
                    }
                } else {
                    $sql120 = "UPDATE category SET status='1' WHERE id='$idee'";
                    if ($conn->query($sql120) !== TRUE) {
                        echo "Error updating record: " . $conn->error;
                    }
                }
            }
            header("location:$id2");
        } else {
            echo $conn->error;
        }
    } elseif ($id1 == "product") {
        $sql6 = "UPDATE $id1 SET status='0' WHERE id='$id'";

        if ($conn->query($sql6) === TRUE) {
            $sql116 = "SELECT id FROM sub_category";
            $result116 = $conn->query($sql116);
            while ($row116 = $result116->fetch_assoc()) {
                $id116 = $row116['id'];
                $sql117 = "SELECT sub_category_id FROM product WHERE sub_category_id='$id116' AND status='1'";
                $result117 = $conn->query($sql117);
                if ($result117->num_rows == 0) {
                    $sql118 = "UPDATE sub_category SET status='0' WHERE id='$id116'";
                    if ($conn->query($sql118) === TRUE) {
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                } else {
                    $sql119 = "UPDATE sub_category SET status='1' WHERE id='$id116'";
                    if ($conn->query($sql119) !== TRUE) {
                        echo "Error updating record: " . $conn->error;
                    }
                }
            }

            $sql120 = "SELECT id FROM sub_subcategory";
            $result120 = $conn->query($sql120);
            while ($row120 = $result120->fetch_assoc()) {
                $id120 = $row120['id'];
                $sql121 = "SELECT sub_subcategory_id FROM product WHERE sub_subcategory_id='$id120' AND status='1'";
                $result121 = $conn->query($sql121);
                if ($result121->num_rows == 0) {
                    $sql122 = "UPDATE sub_subcategory SET status='0' WHERE id='$id120'";
                    if ($conn->query($sql122) !== TRUE) {
                        echo "Error updating record: " . $conn->error;
                    }
                } else {
                    $sql123 = "UPDATE sub_subcategory SET status='1' WHERE id='$id120'";
                    if ($conn->query($sql123) !== TRUE) {
                        echo "Error updating record: " . $conn->error;
                    }
                }
            }
            header("location:$id2");
        } else {
            echo $conn->error;
        }
    } elseif ($id1 == "stockk") {
        $sql7 = "UPDATE product SET stockk = '0' WHERE id='$id'";

        if ($conn->query($sql7) === TRUE) {
            header("location:$id2");
        } else {
            echo $conn->error;
        }
    } else {
        $sql7 = "UPDATE $id1 SET status='0' WHERE id='$id'";

        if ($conn->query($sql7) === TRUE) {
            header("location:$id2");
        } else {
            echo $conn->error;
        }
    }
    $conn->close();
    ?>
</body>

</html>