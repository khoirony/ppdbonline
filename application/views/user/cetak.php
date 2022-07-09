<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cetak Formulir Pendaftaran</title>
  </head>
  <body>
    <div class="container text-center">
      <img src="<?= base_url('assets/img/kop.PNG');?>" alt="kop" class="border-bottom text-center" style="margin-left:-8em;">
    </div>
    <h5 class="text-center fw-bold">FORMULIR PENDAFTARAN PESERTA DIDIK BARU</>
    <h5 class="text-center fw-bold">TAHUN PELAJARAN 2021/2022</>
    <br><br><br>

    <div class="mx-5 px-5 small text-start fw-normal">
      <div class="mx-5">
        <div class="row">
          <div class="col-5 mb-3">
            1. Nama Lengkap
          </div>
          <div class="col-7">
          : <?= $siswa['nama_lengkap']; ?>
          </div>
    
          <div class="col-5 mb-3">
          2. Tempat Tanggal Lahir
          </div>
          <div class="col-7">
          : <?= $siswa['tempat_lahir']; ?>, <?= $siswa['tgl_lahir']; ?>
          </div>
          
          <div class="col-5 mb-3">
          3. Jenis Kelamin
          </div>
          <div class="col-7">
          : <?= $siswa['jk']; ?>
          </div>
          
          <?php 
            $birthDate = new DateTime($siswa['tgl_lahir']); 
            $today = new DateTime('today'); 
            $y = $today->diff($birthDate)->y; 
          ?>
          <div class="col-5 mb-3">
          4. Umur Sekarang
          </div>
          <div class="col-7">
          : <?= $y; ?>
          </div>
          
          <div class="col-5 mb-3">
          5. Anak Ke-
          </div>
          <div class="col-7">
          : <?= $siswa['anak_ke']; ?>
          </div>
          
          <div class="col-5 mb-3">
          6. Jumlah Saudara
          </div>
          <div class="col-7">
          : <?= $siswa['jumlah_saudara']; ?>
          </div>
          
          <div class="col-5 mb-3">
          7. Agama
          </div>
          <div class="col-7">
          : <?= $siswa['agama']; ?>
          </div>
          
          <div class="col-5 mb-3">
          8. Alamat
          </div>
          <div class="col-7">
          : <?= $siswa['alamat']; ?>
          </div>
          
          <div class="col-5 mb-3">
          9. Alamat Email
          </div>
          <div class="col-7">
          : <?= $user['email']; ?>
          </div>
          
          <div class="col-5 mb-3">
          10. Hobi dan Cita-cita
          </div>
          <div class="col-7">
          : <?= $siswa['hobi']; ?>, <?= $siswa['cita_cita']; ?>
          </div>
          
          <div class="col-5 mb-3">
          11. Jarak Rumah ke Sekolah
          </div>
          <div class="col-7">
          : <?= $siswa['jarak_rumah']; ?>
          </div>
          
          <div class="col-5 mb-3">
          12. Transportasi ke Sekolah
          </div>
          <div class="col-7">
          : <?= $siswa['transportasi']; ?>
          </div>
          
          <div class="col-5 mb-3">
          13. Asal Sekolah
          </div>
          <div class="col-7">
          : <?= $sekolah['asal_sekolah']; ?>
          </div>
          
          <div class="col-5 mb-3">
          14. Alamat Sekolah Asal
          </div>
          <div class="col-7">
          : <?= $sekolah['alamat_sekolah']; ?>
          </div>
          
          <div class="col-5 mb-3">
          15. Status Sekolah Asal
          </div>
          <div class="col-7">
          : <?= $sekolah['status_sekolah']; ?>
          </div>
          
          <div class="col-5 mb-3">
          16. Ijazah Mts/SMP
          </div>
          <div class="col-7">
          
          </div>
          
          <div class="col-5 mb-3 ps-5">
          a. Tahun Ijazah
          </div>
          <div class="col-7">
          : <?= $sekolah['tahun_lulus']; ?>
          </div>
  
          <div class="col-5 mb-3 ps-5">
          b. Nomor Ijazah
          </div>
          <div class="col-7">
          : <?= $sekolah['nomor_ijazah']; ?>
          </div>
          
          <div class="col-5 mb-3">
          17. Nama Orang Tua/Wali
          </div>
          <div class="col-7">
          
          </div>
          
          <div class="col-5 mb-3 ps-5">
          a. Ayah
          </div>
          <div class="col-7">
          : <?= $ortu['nama_ayah']; ?>
          </div>
  
          <div class="col-5 mb-3 ps-5">
          b. Ibu
          </div>
          <div class="col-7">
          : <?= $ortu['nama_ibu']; ?>
          </div>
          
          <div class="col-5 mb-3">
          18. Pendidikan Orang Tua/Wali
          </div>
          <div class="col-7">
          
          </div>
          
          <div class="col-5 mb-3 ps-5">
          a. Ayah
          </div>
          <div class="col-7">
          : <?= $ortu['pendidikan_ayah']; ?>
          </div>
  
          <div class="col-5 mb-3 ps-5">
          b. Ibu
          </div>
          <div class="col-7">
          : <?= $ortu['pendidikan_ibu']; ?>
          </div>
          
          <div class="col-5 mb-3">
          19. Pekerjaan Orang Tua/Wali
          </div>
          <div class="col-7">
          
          </div>
          
          <div class="col-5 mb-3 ps-5">
          a. Ayah
          </div>
          <div class="col-7">
          : <?= $ortu['pekerjaan_ayah']; ?>
          </div>
  
          <div class="col-5 mb-3 ps-5">
          b. Ibu
          </div>
          <div class="col-7">
          : <?= $ortu['pekerjaan_ibu']; ?>
          </div>
          
          <div class="col-5 mb-3">
          20. Penghasilan Orang Tua/Bulan
          </div>
          <div class="col-7">
          : <?= $ortu['penghasilan_perbulan']; ?>
          </div>
          
          <div class="col-5 mb-3">
          21. Alamat Orang Tua/Wali
          </div>
          <div class="col-7">
          : <?= $ortu['alamat_ortu']; ?>
          </div>
          
          <div class="col-5 mb-3">
          22. No. Telepon/HP
          </div>
          <div class="col-7">
          : <?= $ortu['nomor_ortu']; ?>
          </div>
        </div><br><br><br>
      </div>

      <div class="row">
        <div class="col-8">
          <br><br><br><br><br><br>
        Catatatan: <br>
        1. Lampirkan satu lembar Foto copy Ijazah/surat keterangan lulus <br>
        2. Fotocopy Kartu Keluarga & Akta Kelahiran (<?= $siswa['nama_lengkap']; ?>) <br>
        3. Pas Foto Ukuran 2 x 3 (2 Lembar) dan 3 x 4 (3 Lembar) <br>
        4. Fotocopy Kartu KKS/KIP/PKH/SKTM (Jika Ada)
        </div>
        <div class="col-4">
          <p class="text-center">Anjir Muara, <?= date('d-m-Y'); ?></p>
          <p class="text-center">Yang bertandatangan dibawah ini,</p>
          <br>
          <br>
          <br><br>
          <p class="text-center">
            (<?= $siswa['nama_lengkap']; ?>)
          </p>
        </div>
      </div>
    </div>


    <script>
        window.print();
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>