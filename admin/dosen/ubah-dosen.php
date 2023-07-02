<?php
$id_dosen = $_GET["id_dosen"];

if (isset($_POST['ubah'])) {
    if ($admin->ubahDataDosen($_POST) > 0) {
        echo
        "<script>
      alert('Data BERHASIL Diubah!');
      window.location.href='?p=data-dosen'
    </script>";
    } else {
        echo
        "<script>
      alert('Data GAGAL Diubah!');
      window.location.href='?p=data-dosen'
    </script>";
    }
}

$dosen = $admin->getDosenById($id_dosen);
$prodi = $admin->getAllProdi();







?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-5">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Ubah Dosen</h1>
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

                        <input class="form-control" type="text" name="id_dosen" id="id_dosen" autocomplete="off" hidden value="<?= $dosen['id_dosen'] ?>">
                    </div>



                    <div class="form-group">
                        <label for="nama">
                            Nama Dosen :
                        </label>
                        <input class="form-control" type="text" name="nama" id="nama" required autocomplete="off" value="<?= $dosen['nama'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="id_prodi">Id Prodi : </label>
                        <select class="form-control" name="id_prodi" required>
                            <?php foreach ($prodi as $prd) : ?>
                                <option class="option" value=" <?= $prd['id_prodi']  ?>" <?php if ($dosen['id_prodi'] == $prd['id_prodi']) {
                                                                                                echo "selected";
                                                                                            } ?>>
                                    <?= $prd['prodi'] ?>
                                </option>

                            <?php endforeach; ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">
                            Alamat :
                        </label>
                        <input class="form-control" type="text  " name="alamat" id="alamat" required value="<?= $dosen['alamat'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Jenis Kelamin : </label>
                        <input class="form-control" type="text" name="jenis_kelamin" id="jenis_kelamin" required readonly value="<?= $dosen['jenis_kelamin'] ?>">
                    </div>



                    <hr>
                    <button class="btn btn-primary" type="submit" name="ubah">Ubah Data!</button>
                </form>
            </div>

        </div>
    </section>
</div>