<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Pembayaran SPP</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<!-- Navbar -->

<nav class="navbar navbar-dark bg-primary">

    <div class="container">

        <span class="navbar-brand fw-bold">
            Sistem Pembayaran SPP
        </span>

        <a href="logout.php"
           class="btn btn-light btn-sm">
            Logout
        </a>

    </div>

</nav>


<!-- Content -->

<div class="container py-5">

    <div class="mb-4">

        <h2 class="fw-bold">
            Dashboard
        </h2>

        <p class="text-muted">
            Selamat datang di Sistem Pembayaran SPP Siswa
        </p>

    </div>


    <div class="row g-4">


        <!-- Siswa -->

        <div class="col-md-4">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body">

                    <h4> Data Siswa</h4>

                    <p class="text-muted">
                        Kelola data siswa.
                    </p>

                    <a href="siswa.php"
                       class="btn btn-primary">
                        Buka Data
                    </a>

                </div>

            </div>

        </div>


        <!-- Kelas -->

        <div class="col-md-4">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body">

                    <h4> Data Kelas</h4>

                    <p class="text-muted">
                        Kelola data kelas.
                    </p>

                    <a href="kelas.php"
                       class="btn btn-primary">
                        Buka Data
                    </a>

                </div>

            </div>

        </div>


        <!-- Petugas -->

        <div class="col-md-4">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body">

                    <h4> Data Petugas</h4>

                    <p class="text-muted">
                        Kelola data petugas.
                    </p>

                    <a href="petugas.php"
                       class="btn btn-primary">
                        Buka Data
                    </a>

                </div>

            </div>

        </div>


        <!-- SPP -->

        <div class="col-md-4">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body">

                    <h4> Data SPP</h4>

                    <p class="text-muted">
                        Kelola data SPP.
                    </p>

                    <a href="spp.php"
                       class="btn btn-primary">
                        Buka Data
                    </a>

                </div>

            </div>

        </div>


        <!-- Pembayaran -->

        <div class="col-md-4">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body">

                    <h4> Pembayaran</h4>

                    <p class="text-muted">
                        Input pembayaran SPP siswa.
                    </p>

                    <a href="pembayaran.php"
                       class="btn btn-success">
                        Bayar SPP
                    </a>

                </div>

            </div>

        </div>


        <!-- Cek Pembayaran -->

        <div class="col-md-4">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body">

                    <h4> Cek Pembayaran</h4>

                    <p class="text-muted">
                        Melihat data pembayaran siswa.
                    </p>

                    <a href="cek_pembayaran.php"
                       class="btn btn-info text-white">
                        Cek Pembayaran
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</body>

</html>