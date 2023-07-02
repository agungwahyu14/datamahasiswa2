<?php
if (isset($_POST['tambah'])) {
    if ($admin->tambahDataProdi($_POST) > 0) {
        echo
        "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=program-studi'
    </script>";
    } else {
        echo
        "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=program-studi'
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
                    <h1 class="m-0">Form Tambah Prodi</h1>
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
                        <label for="id_prodi">
                            Id Prodi :
                        </label>
                        <input class="form-control" type="text" name="id_prodi" id="id_prodi" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="prodi">
                            Program Studi :
                        </label>
                        <input class="form-control" type="text" name="prodi" id="prodi" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas :</label>
                        <select class="form-control" id="kelas" name="kelas" readonly>

                            <option value="Pagi">Pagi</option>

                        </select>
                    </div>


                    <hr>
                    <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
                </form>
            </div>
        </div>
    </section>

</div>