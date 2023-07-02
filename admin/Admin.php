<?php
require '../config/Database.php';

class Admin extends Database
{

  // === SECTION SISWA ===
  public function getAllMahasiswa()
  {
    $query = "SELECT * FROM tb_mahasiswa";
    $mahasiswa = $this->query($query);

    return $mahasiswa;
  }

  public function getMahasiswaById($nim)
  {
    $query = "SELECT * FROM tb_mahasiswa WHERE nim = '$nim'";
    $mahasiswa = $this->query($query);

    if (empty($mahasiswa)) {
      return $mahasiswa;
    } else {
      return $mahasiswa[0];
    }
  }

  public function tambahDataMahaiswa($data)
  {
    $conn = $this->conn;

    $nim = htmlspecialchars($data['nim']);
    $nama = htmlspecialchars($data['nama']);
    $id_prodi = htmlspecialchars($data['id_prodi']);
    $id_dosen = htmlspecialchars($data['id_dosen']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $alamat = htmlspecialchars($data['alamat']);


    mysqli_query($conn, "INSERT INTO tb_mahasiswa VALUES ('$nim','$nama','$id_prodi','$id_dosen','$jenis_kelamin','$alamat')");

    return mysqli_affected_rows($conn);
  }

  public function ubahDataMahasiswa($data)
  {
    $conn = $this->conn;

    $nim = $data["nim"];
    $nama = htmlspecialchars($data['nama']);
    $id_prodi = htmlspecialchars($data['id_prodi']);
    $id_dosen = htmlspecialchars($data['id_dosen']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
    $alamat = htmlspecialchars($data['alamat']);

    mysqli_query($conn, "UPDATE tb_mahasiswa SET
                          nim = '$nim',
                          nama = '$nama',
                          id_prodi = '$id_prodi',
                          id_dosen = '$id_dosen',
                          jenis_kelamin = '$jenis_kelamin',
                          alamat = '$alamat'
                          

                        WHERE nim = '$nim'
    ");

    return mysqli_affected_rows($conn);
  }

  public function hapusMahasiswa($nim)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM tb_mahasiswa WHERE nim = $nim");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION SISWA ==



  // === SECTION PETUGAS ===
  public function getAllPetugas()
  {
    $query = "SELECT * FROM tb_admin";
    $petugas = $this->query($query);

    return $petugas;
  }

  public function getPetugasById($id_petugas)
  {
    $query = "SELECT * FROM tb_admin WHERE id_petugas = " . $id_petugas;
    $petugas = $this->query($query);

    return $petugas[0];
  }

  public function tambahDataPetugas($data)
  {
    $conn = $this->conn;
    $nama_petugas = htmlspecialchars($data['nama_petugas']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    $query = "SELECT * FROM tb_admin WHERE username = '$username'";
    $cek = $this->query($query);
    if ($cek) {
      echo
      "<script>
        alert('Username Petugas Sudah Terdaftar!');
        window.location.href='?p=data-petugas'
      </script>";
      exit;
    } else {

      mysqli_query($conn, "INSERT INTO tb_admin VALUES ('','$nama_petugas','$password','$username')");

      return mysqli_affected_rows($conn);
    }
  }

  public function ubahDataPetugas($data)
  {
    $conn = $this->conn;

    $id_petugas = $data["id_petugas"];
    $nama_petugas = htmlspecialchars($data['nama_petugas']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $role = htmlspecialchars($data['role']);

    mysqli_query($conn, "UPDATE tb_admin SET
                          id_petugas = '$id_petugas',
                          nama_petugas = '$nama_petugas',
                          username = '$username',
                          password = '$password'

                        WHERE id_petugas = $id_petugas
    ");

    return mysqli_affected_rows($conn);
  }

  public function hapusPetugas($id_petugas)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM tb_admin WHERE id_petugas = $id_petugas");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION PETUGAS ==



  // === SECTION KELAS ===
  public function getAllDosen()
  {
    $query = "SELECT * FROM tb_dosen";
    $dosen = $this->query($query);

    return $dosen;
  }

  public function getDosenById($id_dosen)
  {
    $query = "SELECT * FROM tb_dosen WHERE id_dosen = " . $id_dosen;
    $dosen = $this->query($query);

    return $dosen[0];
  }

  public function tambahDataDosen($data)
  {
    $conn = $this->conn;

    $nama = htmlspecialchars($data['nama']);
    $id_prodi = htmlspecialchars($data['id_prodi']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);

    mysqli_query($conn, "INSERT INTO tb_dosen VALUES ('','$nama','$id_prodi','$alamat','$jenis_kelamin')");

    return mysqli_affected_rows($conn);
  }

  public function ubahDataDosen($data)
  {
    $conn = $this->conn;
    $id_dosen = htmlspecialchars($data['id_dosen']);
    $nama = htmlspecialchars($data['nama']);
    $id_prodi = htmlspecialchars($data['id_prodi']);
    $alamat = htmlspecialchars($data['alamat']);
    $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);

    mysqli_query($conn, "UPDATE tb_dosen SET
                          id_dosen = '$id_dosen',
                          nama = '$nama',
                          id_prodi = '$id_prodi',
                          alamat = '$alamat',
                          jenis_kelamin = '$jenis_kelamin'

                        WHERE id_dosen = $id_dosen
    ");

    return mysqli_affected_rows($conn);
  }

  public function hapusDosen($id_dosen)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM tb_dosen WHERE id_dosen = $id_dosen");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION KELAS ==



  // === SECTION SPP ===
  public function getAllProdi()
  {
    $query = "SELECT * FROM tb_prodi";
    $prodi = $this->query($query);

    return $prodi;
  }

  public function getProdiById($id_prodi)
  {
    $query = "SELECT * FROM tb_prodi WHERE id_prodi = '$id_prodi'";
    $prodi = $this->query($query);

    if (empty($prodi)) {
      return $prodi;
    } else {
      return $prodi[0];
    }
  }

  public function tambahDataProdi($data)
  {
    $conn = $this->conn;

    $id_prodi = htmlspecialchars($data['id_prodi']);
    $prodi = htmlspecialchars($data['prodi']);
    $kelas = htmlspecialchars($data['kelas']);

    $query = "SELECT * FROM tb_prodi WHERE id_prodi = '$id_prodi'";
    $cek = $this->query($query);
    if ($cek) {
      echo
      "<script>
        alert('Username Petugas Sudah Terdaftar!');
        window.location.href='?p=program-studi'
      </script>";
      exit;
    } else {

      mysqli_query($conn, "INSERT INTO tb_prodi VALUES ('$id_prodi','$prodi','$kelas')");

      return mysqli_affected_rows($conn);
    }
  }


  public function hapusProdi($id_prodi)
  {
    $conn = $this->conn;
    mysqli_query($conn, "DELETE FROM tb_prodi WHERE id_prodi = '$id_prodi'");

    return mysqli_affected_rows($conn);
  }
  // === END SECTION PRODI ===

}
