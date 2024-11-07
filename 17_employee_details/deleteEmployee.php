<?php
include("connectDb.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `employees` WHERE `id` = $id";
    if (mysqli_query($conn, $query)) {
        echo "Employee Deleted Successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "No employee ID provided.";
}
?>
