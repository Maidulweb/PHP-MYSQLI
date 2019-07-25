<?php
$conn = mysqli_connect('localhost', 'root', '', 'database');
/* INSERT QUERY */
if ($conn) {
    $id = $_GET['id'];
    $sql = "DELETE FROM authority WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    header('Location: index.php');
}

?>