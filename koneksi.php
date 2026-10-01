<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "pembayaran_siswa"
);

if ($koneksi) {
    echo "";
} else {
    echo "Koneksi gagal!";
}

?>