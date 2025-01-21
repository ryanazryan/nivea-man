<!doctype html>
<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIVEA MEN BARANG</title>
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
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <link rel="shortcut icon" href="<?= base_url('assets/img/logoskatel.png');  ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="
    https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<style>
        html,
    body {
        position: relative;
        height: 100%;

    }

    body {
        color: #000;
        margin: 0;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.6s;
        padding: 10px 30px;

    }

    header.sticky {
        padding: 5px 100px;
        background-color: #1f1f1f;
        background-image: linear-gradient(43deg, #1f1f1f 0%, #464646 30%, #636363 66%, #ffffff 100%);
        transition: 1.5s;
        z-index: 50;
        position: fixed;
    }

    header.sticky .logo {
        width: 55px;

    }

    header.sticky button ul li a {
        color: #2b2b2b;
    }

    header.sticky ul li a:hover {
        color: #fff;
    }


    header .logo {
        position: relative;
        letter-spacing: 2px;
    }

    header ul {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    header ul li {
        position: relative;
        list-style: none;

    }

    header ul li a {
        position: relative;
        margin: 0 15px;
        color: #fff;
        letter-spacing: 2px;
        font-weight: 300px;
        transition: 0.5s;
    }
</style>

<body class="gradient">
<div class="container mx-auto">
    <header class="bg-black">
        <img src="<?= base_url('assets/images/logo.png') ?>" alt="" class="logo w-16">
        <ul>
            
            <li><a href="<?= site_url('barang') ?>">Barang</a></li>
            <li><a href="<?= site_url('supplier') ?>">Supplier</a></li>
        </ul>
    </header>
        <div class="flex justify-center m-5">
            <div class="mr-[270px] text-2xl font-bold ">
                <h1>Data Supplier</h1>
            </div>
        </div>
        <div class="mx-20">
            <table id="table_id" class="table table-striped ">
                <thead>
                    <tr>
                        <th class="border text-white">ID Supplier</th>
                        <th class="border text-white">Nama Barang</th>
                        <th class="border text-white">Jenis Barang</th>
                        <th class="border text-white">Jumlah Masuk</th>
                        <th class="border text-white">Tanggal Masuk</th>
                        <th class="border text-white">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($supplier as $s) : ?>
                        <tr>
                            <td class="border text-white"><?php echo $s->id_supplier ?></td>
                            <td class="border text-white"><?php echo $s->nama_barang ?></td>
                            <td class="border text-white"><?php echo $s->jenis_barang ?></td>
                            <td class="border text-white"><?php echo $s->jumlah ?></td>
                            <td class="border text-white"><?php echo $s->tanggal_masuk ?></td>
                            <td class="border text-white">
                                <a class="btn btn-warning text-white" href="<?php echo site_url('supplier/ubah/' . $s->id_supplier) ?>">Ubah</a>
                                <a class="btn btn-danger" href="<?php echo site_url('supplier/hapus/' . $s->id_supplier) ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <div class="mb-3 text-white">
                        <a href="<?php echo site_url('supplier/simpan') ?>" class="bg-blue-800 rounded-lg p-2 hover:bg-blue-500 text-white">Tambah Data</a>
                    </div>
                </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#table_id').DataTable({
                    paging: false,
                    ordering: false,
                    info: false,
                });
            });
            </script>
</body>

</html>