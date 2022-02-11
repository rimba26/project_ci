<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>

    <div class="card text-center">
        <div class="card-header">
            By: Muhammad Rimba Abdillah
        </div>
        <div class="card-body">
            <h5 class="card-title">Form Login</h5>
            <?php if(!empty($output)): ?>
            <?php echo $output ?>
            <?php endif ?>
            <p class="card-text">Selamat Datang Di Pendataan Siswa Silahkan Login Terlebih Dahulu</p>
        </div>
        <div class="card-footer text-muted">
            <form action="" method="post">
                <label for="">Username</label><br>
                <input type="text" name="name" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" required><br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>


    <!-- <center>
        <h3>Form Login</h3>

        <form action="" method="post">
            <label for="">Username</label><br>
            <input type="text" name="name" required><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
    </center> -->
</body>

</html>