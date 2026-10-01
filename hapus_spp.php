<?php

include "koneksi.php";

$id = $_GET['id'];

mysqli_query(
    $koneksi,
    "DELETE FROM spp
     WHERE id_spp='$id'"
);

header("Location: spp.php");

exit;

?>