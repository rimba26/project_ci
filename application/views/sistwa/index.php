 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <title>Data Siswa</title>
 </head>

 <body>
     <div class="container">
         <div class="card">
             <div class="card-header">
                 login sebagai: <?php echo $this->session->userdata('auth')['name']; ?>
                 <a href="<?php echo base_url('index.php/auth/logout') ?>">Logout</a>
             </div>
             <div class="card-body">
                 <h5 class="card-title">Data Siswa</h5>
                 <p class="card-text">by: Muhammad Rimba</p>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
                 <a href="<?php echo base_url('index.php/sistwa/tambah') ?>">
                     <div class="d-grid gap-2 d-md-block" style="padding-top: 30px;">
                         <button class="btn btn-primary" type="button">Tambah Siswa</button>
                 </a>
             </div>

             <div class=" col-6" style="padding-top: 20px;">
                 <form action="" method="get">
                     <input type="text" name="nama" placeholder="masukkan nama siswa" style="text-align: center"><button
                         type=" submit" class="btn btn-primary btn-sm">Cari</button>
                 </form>
             </div>
         </div>
     </div>
     <?php if(!empty($data)):?>

     <table class="table table-dark table-striped">
         <thead>
             <th>NO</th>
             <th>Nama</th>
             <th>Jenis Kelamin</th>
             <th>Tanggal Lahir</th>
             <th>Action</th>
         </thead>
         <tbody>
             <?php $i = 1; ?>
             <?php foreach($data AS $key => $value): ?>
             <tr>
                 <td><?php echo $i++; ?></td>
                 <td><?php echo $value['nama'] ?></td>
                 <td><?php echo $value['jk'] ?></td>
                 <td><?php echo $value['tgl_lahir'] ?></td>
                 <td><a class="btn btn-info"
                         href="<?php echo base_url('index.php/sistwa/edit/'.$value['id'])?>">Edit</a>
                     <a class="btn btn-danger"
                         href="<?php echo base_url('index.php/sistwa/action_delete/'.$value['id'])?>">Delete</a>
                 </td>
             </tr>
             <?php endforeach?>
         </tbody>
     </table>
     <?php endif ?>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
     </script>

     </div>
 </body>

 </html>