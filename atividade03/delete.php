<?php

include 'db.php';

if (isset($_GET['id'])){

    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE id=$id";

    $conn->query($sql);

    $conn ->close();
    header ("Location: read.php");
    exit();
}

?>