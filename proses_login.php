<?php

session_start();

include "koneksi.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query(
        $koneksi,
        "SELECT * FROM petugas
         WHERE username='$username'
         AND password='$password'"
    );

    $data = mysqli_fetch_assoc($query);

    if ($data) {

        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];

        header("Location: dashboard.php");
        exit;

    } else {

        echo "
        <script>
            alert('Username atau password salah!');
            window.location='login.php';
        </script>
        ";

    }

}

?>