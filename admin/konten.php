<?php

if (empty($_GET)) {
  include 'dashboard.php';
}

if (isset($_GET["p"])) {
  if ($_GET["p"] == "home") {
    require 'home.php';
  } elseif ($_GET["p"] == "dashboard") {
    require 'dashboard.php';
  } elseif ($_GET["p"] == "data-mahasiswa") {
    require 'mahasiswa/data-mahasiswa.php';
  } elseif ($_GET["p"] == "data-petugas") {
    require 'petugas/data-petugas.php';
  } elseif ($_GET["p"] == "program-studi") {
    require 'prodi/program-studi.php';
  } elseif ($_GET["p"] == "data-dosen") {
    require 'dosen/data-dosen.php';
  } elseif ($_GET["p"] == "tmb-mahasiswa") {
    require 'mahasiswa/tambah-mahasiswa.php';
  } elseif ($_GET["p"] == "tmb-petugas") {
    require 'petugas/tambah-petugas.php';
  } elseif ($_GET["p"] == "tmb-prodi") {
    require 'prodi/tambah-prodi.php';
  } elseif ($_GET["p"] == "tmb-dosen") {
    require 'dosen/tambah-dosen.php';
  } elseif ($_GET["p"] == "ubh-mahasiswa") {
    require 'mahasiswa/ubah-mahasiswa.php';
  } elseif ($_GET["p"] == "ubh-petugas") {
    require 'petugas/ubah-petugas.php';
  } elseif ($_GET["p"] == "ubh-dosen") {
    require 'dosen/ubah-dosen.php';
  } elseif ($_GET["p"] == "hps-mahasiswa") {
    if ($admin->hapusMahasiswa($_GET["nim"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-mahasiswa';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-mahasiswa';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-petugas") {
    if ($admin->hapusPetugas($_GET["id_petugas"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-petugas';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-petugas';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-prodi") {
    if ($admin->hapusProdi($_GET["id_prodi"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=program-studi';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=program-studi';
      </script>";
    }
  } elseif ($_GET["p"] == "hps-dosen") {
    if ($admin->hapusDosen($_GET["id_dosen"]) > 0) {
      echo "
      <script>
        alert('Data BERHASIL Dihapus');
        window.location.href='?p=data-dosen';
      </script>";
    } else {
      echo "
      <script>
        alert('Data GAGAL Dihapus');
        window.location.href='?p=data-dosen';
      </script>";
    }
  } elseif ($_GET["p"] == "logout") {
    session_destroy();
    echo "<script>window.location.href='../index.php';</script>";
  }
}
