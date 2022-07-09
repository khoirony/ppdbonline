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
    </div><br><br>
    <h3 class="text-center fw-bold">SURAT KETERANGAN KELULUSAN</h3>
    <br><br>

    <div class="mx-5 px-5 small text-start fw-normal">
      <div class="mx-5 fs-5">
        <p>Berdasarkan hasil seleksi jalur prestasi dan bina lingkungan Madrasah Aliyah Darul Mukarram, <br>
          menerangkan bahwa:
        </p>
        <div class="row">
          <div class="col-4 mb-3">
            Nama Lengkap
          </div>
          <div class="col-7">
          : <?= $siswa['nama_lengkap']; ?>
          </div>

          <div class="col-4 mb-3">
            TTL
          </div>
          <div class="col-7">
          : <?= $siswa['tempat_lahir']; ?>, <?= $siswa['tgl_lahir']; ?>
          </div>
          
          <div class="col-4 mb-3">
            Alamat
          </div>
          <div class="col-7">
          : <?= $siswa['alamat']; ?>
          </div>
          
          <div class="col-4 mb-3">
          Asal Sekolah
          </div>
          <div class="col-7">
          : <?= $sekolah['asal_sekolah']; ?>
          </div>
        </div><br>
        <h5 class="fw-bold text-center">DINYATAKAN</h5>
        <?php 
        if($data_siswa['status_lulus'] == 1){
        ?>
            <P class="display-4 fw-bold text-center">
                LULUS
            </P>
        <?php 
        }else{
        ?>
            <P class="display-4 fw-bold text-center">
                BELUM LULUS
            </P>
        <?php 
        }
        ?>
        <br><br>
        <p class="fs-5">Demikian surat keterangan pemberitahuan ini, agar dapat digunakan sebagaimana mestinya
        </p>

      </div><br><br><br><br><br><br><br><br>
    </div>


    <script>
        window.print();
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>