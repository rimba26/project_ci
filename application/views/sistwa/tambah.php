<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah Siswa</title>
</head>

<body>

    <center>
        <h1 style="font-family: sans-serif">From Tambah Siswa</h1>
        login sebagai: <?php echo $this->session->userdata('auth')['name']; ?>
        <a href="<?php echo base_url('index.php/auth/logout') ?>">Logout</a>
        <br>
        <a href="<?php echo base_url('index.php/sistwa') ?>"><button>Data Siswa</button></a>
        <form action="<?php echo base_url('index.php/sistwa/action_tambah') ?>" method="post">
            <div class="mb-3 col-2" style="padding-top: 20px">
                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama">
                <div id="emailHelp" class="form-text"></div>
                <br>
                <select class="form-select" aria-label="Default select example" name="jk">

                    <option value="1">Laki-Laki</option>
                    <option value="2">Perempuan</option>
                </select>
                <br>
                <label for="">Tanggal Lahir</label><br>
                <input type="date" name="tgl_lahir" required>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <!-- <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
        </form>

    </center>

    <!-- <form>
            <label for="">Nama</label><br>
            <input type="text" name="nama" required><br>
            <select name="jk">
                <option value="1">laki-laki</option>
                <option value="2">perempuan</option>
            </select><br>
            
        </form> -->

</body>

</html>