<?php
if (isset($_POST['tambah'])) {
    if ($admin->tambahDataPetugas($_POST) > 0) {
        echo
        "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=data-petugas'
    </script>";
    } else {
        echo
        "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=data-petugas'
    </script>";
    }
}


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Tambah Petugas</h1>
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

                        <input class="form-control" type="text" name="id_petugas" id="id_petugas" autocomplete="off" hidden>
                    </div>



                    <div class="form-group">
                        <label for="nama_petugas">
                            Nama Petugas :
                        </label>
                        <input class="form-control" type="text" name="nama_petugas" id="nama_petugas" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="username">
                            Username :
                        </label>
                        <input class="form-control" type="username" name="username" id="username" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="password">
                            Password :
                        </label>
                        <input class="form-control" type="password" name="password" id="password" required>
                    </div>


                    <hr>
                    <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
                </form>
            </div>
        </div>
    </section>

</div>