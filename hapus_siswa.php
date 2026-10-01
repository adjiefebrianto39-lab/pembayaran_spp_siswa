<?php

include "koneksi.php";

$nisn = $_GET['nisn'];

mysqli_query(
    $koneksi,
    "DELETE FROM siswa WHERE nisn='$nisn'"
);

header("Location: siswa.php");

?>