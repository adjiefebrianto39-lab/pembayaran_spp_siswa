<!DOCTYPE html>
<html>

<head>

    <title>Login SPP</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

</head>

<body>

<div class="container mt-5">

    <div class="col-md-4 mx-auto">

        <h3 class="text-center">
            Login Pembayaran SPP
        </h3>

        <br>

        <form action="proses_login.php" method="POST">

            <label>Username</label>

            <input
                type="text"
                name="username"
                class="form-control"
                required
            >

            <br>

            <label>Password</label>

            <input
                type="password"
                name="password"
                class="form-control"
                required
            >

            <br>

            <button
                type="submit"
                name="login"
                class="btn btn-primary w-100"
            >
                Login
            </button>

        </form>

    </div>

</div>

</body>

</html>
```
