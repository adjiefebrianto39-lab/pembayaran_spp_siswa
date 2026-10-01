<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM petugas
     WHERE id_petugas='$id'"
);

$petugas = mysqli_fetch_assoc($data);


if (isset($_POST['update'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];


    mysqli_query($koneksi, "

        UPDATE petugas SET

        username='$username',
        password='$password',
        level='$level'

        WHERE id_petugas='$id'

    ");


    header("Location: petugas.php");

    exit;

}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Petugas</title>

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


                <h3 class="fw-bold mb-1">
                    Edit Data Petugas
                </h3>

                <p class="text-muted mb-4">
                    Ubah informasi akun petugas
                </p>


                <form method="POST">


                    <!-- ID -->

                    <div class="mb-3">

                        <label class="form-label">
                            ID Petugas
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="<?= $petugas['id_petugas']; ?>"
                            disabled
                        >

                    </div>


                    <!-- Username -->

                    <div class="mb-3">

                        <label class="form-label">
                            Username
                        </label>

                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            value="<?= $petugas['username']; ?>"
                            required
                        >

                    </div>


                    <!-- Password -->

                    <div class="mb-3">

                        <label class="form-label">
                            Password
                        </label>

                        <input
                            type="text"
                            name="password"
                            class="form-control"
                            value="<?= $petugas['password']; ?>"
                            required
                        >

                    </div>


                    <!-- Level -->

                    <div class="mb-4">

                        <label class="form-label">
                            Level
                        </label>

                        <select
                            name="level"
                            class="form-select"
                            required
                        >

                            <option
                                value="admin"
                                <?= $petugas['level'] == 'admin'
                                    ? 'selected'
                                    : ''; ?>
                            >
                                Admin
                            </option>

                            <option
                                value="petugas"
                                <?= $petugas['level'] == 'petugas'
                                    ? 'selected'
                                    : ''; ?>
                            >
                                Petugas
                            </option>

                            <option
                                value="siswa"
                                <?= $petugas['level'] == 'siswa'
                                    ? 'selected'
                                    : ''; ?>
                            >
                                Siswa
                            </option>

                        </select>

                    </div>


                    <hr>


                    <button
                        type="submit"
                        name="update"
                        class="btn btn-primary"
                    >
                        Update Data
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