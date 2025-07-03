<?php
include_once "../includes/db.php";

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM lich_hen WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php?msg=deleted");
    } else {
        echo "Xoá thất bại: " . mysqli_error($conn);
    }
} else {
    echo "ID không hợp lệ!";
}
?>
