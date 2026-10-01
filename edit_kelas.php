<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM kelas WHERE id_kelas='$id'"
);

$kelas = mysqli_fetch_assoc($data);


if (isset($_POST['update'])) {

    $nama_kelas = $_POST['nama_kelas'];

    mysqli_query(
        $koneksi,
        "UPDATE kelas
         SET nama_kelas='$nama_kelas'
         WHERE id_kelas='$id'"
    );

    header("Location: kelas.php");

    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Kelas</title>

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
                    Edit Data Kelas
                </h3>

                <p class="text-muted mb-4">
                    Ubah informasi kelas
                </p>


                <form method="POST">


                    <div class="mb-3">

                        <label class="form-label">
                            ID Kelas
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            value="<?= $kelas['id_kelas']; ?>"
                            disabled
                        >

                    </div>


                    <div class="mb-4">

                        <label class="form-label">
                            Nama Kelas
                        </label>

                        <input
                            type="text"
                            name="nama_kelas"
                            class="form-control"
                            value="<?= $kelas['nama_kelas']; ?>"
                            placeholder="Contoh: X RPL 1"
                            required
                        >

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
                        href="kelas.php"
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