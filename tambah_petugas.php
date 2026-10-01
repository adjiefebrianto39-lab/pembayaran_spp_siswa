<?php

include "koneksi.php";

if (isset($_POST['simpan'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $cek = mysqli_query(
        $koneksi,
        "SELECT * FROM petugas
         WHERE username='$username'"
    );

    if (mysqli_num_rows($cek) > 0) {

        echo "<script>
                alert('Username sudah digunakan!');
              </script>";

    } else {

        mysqli_query($koneksi, "
            INSERT INTO petugas
            (username, password, level)
            VALUES
            ('$username', '$password', '$level')
        ");

        header("Location: petugas.php");
        exit;

    }

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Tambah Petugas</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container py-5">

    <div class="col-md-6 mx-auto">

        <div class="card shadow border-0">

            <div class="card-body p-4">

                <h3 class="fw-bold mb-4">
                    Tambah Petugas
                </h3>

                <form method="POST">

                    <div class="mb-3">

                        <label class="form-label">
                            Username
                        </label>

                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            required
                        >

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            required
                        >

                    </div>

                    <div class="mb-4">

                        <label class="form-label">
                            Level
                        </label>

                        <select
                            name="level"
                            class="form-select"
                        >

                            <option value="admin">
                                Admin
                            </option>

                            <option value="petugas">
                                Petugas
                            </option>

                            <option value="siswa">
                                Siswa
                            </option>

                        </select>

                    </div>

                    <button
                        type="submit"
                        name="simpan"
                        class="btn btn-primary"
                    >
                        Simpan
                    </button>

                    <a
                        href="petugas.php"
                        class="btn btn-secondary"
                    >
                        Kembali
                    </a>

                </form>

            </div>

        </div>

    </div>

</div>

</body>

</html>