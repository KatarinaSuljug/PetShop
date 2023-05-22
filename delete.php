<?php
include "spoj.php";
$delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM proizvodi WHERE id='{$delete_id}'";
    if ($conn->query($sql) === TRUE) {
        echo "Uspješno je izbrisan proizvod";
        header('location: unosispis.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }
?>