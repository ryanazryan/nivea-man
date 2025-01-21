<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIVEA MEN BARANG</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="icon" href="<?= base_url('assets/images/logo.png') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="shortcut icon" href="<?= base_url('assets/img/logoskatel.png');  ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="
    https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<style>
    .hero-btn{
    display: inline-block;
    text-decoration: none;
    color: #00136F;
    border-radius: 10px;
    padding: 12px 34px;
    font-size: 13px;
    background: transparent;
    position: relative;
    box-shadow: inset 0 0 0.10em 0 rgb(30,144,255), 0 0 0.5em 0 rgb(30,144,255);
    text-shadow: 0 0.5px 0 rgb(255, 255, 255)
    } 

    .hero-btn:hover{
    background: #00136F;
    box-shadow: inset 0 0 0.10em 0 rgb(30,144,255), 0 0 0.5em 0 rgb(30,144,255);
    transition: 0.5s;
    color: #fff;
    cursor: default;
}
</style>

<body class="gradient">

    <div class="card mx-10 my-10 ">
        <div class="card-header" style="background-color: #2b2b2b;">
            <h1 class="text-white"> Tambah Data Barang </h1>
        </div>
        <form action="<?= base_url('barang/simpan'); ?>" method="post">
        <?= validation_errors(); ?>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jenis Barang</label>
                    <input type="text" name="jenis_barang" class="form-control" placeholder="Masukkan Jenis Barang">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" placeholder="Masukkan Stok">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga">
                </div>
                <div class="img-btn">
                    <input type="submit" value="Simpan" class="hero-btn" >
                </div>
        </form>
    </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>