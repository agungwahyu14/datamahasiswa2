<?php
$id_petugas = $_GET["id_petugas"];

if (isset($_POST['ubah'])) {
    if ($admin->ubahDataPetugas($_POST) > 0) {
        echo
        "<script>
      alert('Data BERHASIL Diubah!');
      window.location.href='?p=data-petugas'
    </script>";
    } else {
        echo
        "<script>
      alert('Data GAGAL Diubah!');
      window.location.href='?p=data-petugas'
    </script>";
    }
}

$petugas = $admin->getPetugasById($id_petugas);








?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Ubah Petugas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="card mb-4">

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <input class="form-control" type="text" name="id_petugas" id="id_petugas" autocomplete="off" hidden value="<?= $petugas['id_petugas'] ?>">
                    </div>



                    <div class="form-group">
                        <label for="nama_petugas">
                            Nama Petugas :
                        </label>
                        <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" required autocomplete="off" value="<?= $petugas['nama_petugas'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="username">
                            Username :
                        </label>
                        <input class="form-control" type="username" name="username" id="username" required autocomplete="off" value="<?= $petugas['username'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="password">
                            Password :
                        </label>
                        <input class="form-control" type="text  " name="password" id="password" required value="<?= $petugas['password'] ?>">
                    </div>


                    <hr>
                    <button class="btn btn-primary" type="submit" name="ubah">Ubah Data!</button>
                </form>
            </div>

        </div>
    </section>
</div>