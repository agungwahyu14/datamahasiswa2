<?php
if (isset($_POST['tambah'])) {
    if ($admin->tambahDataDosen($_POST) > 0) {
        echo
        "<script>
      alert('Data BERHASIL Ditambah!');
      window.location.href='?p=data-dosen'
    </script>";
    } else {
        echo
        "<script>
      alert('Data GAGAL Ditambah!');
      window.location.href='?p=data-dosen'
    </script>";
    }
}

$prodi = $admin->getAllProdi();


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

                        <input class="form-control" type="text" name="id_dosen" id="id_dosen" autocomplete="off" hidden>
                    </div>



                    <div class="form-group">
                        <label for="nama">
                            Nama Dosen :
                        </label>
                        <input class="form-control" type="text" name="nama" id="nama" required autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="id_prodi">ID Prodi :</label>
                        <select class="form-control" id="id_prodi" name="id_prodi">
                            <option value="">== Pilih Prodi ==</option>
                            <?php foreach ($prodi as $prd) : ?>
                                <option value="<?= $prd['id_prodi'] ?>"><?= $prd['prodi'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">
                            Alamat :
                        </label>
                        <input class="form-control" type="text" name="alamat" id="alamat" required>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin :</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">== Pilih ==</option>
                            <option value="laki-laki">Laki - Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>

                    <hr>
                    <button class="btn btn-primary" type="submit" name="tambah">Tambah Data!</button>
                </form>
            </div>
        </div>
    </section>

</div>