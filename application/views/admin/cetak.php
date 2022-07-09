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
    </div><br>
    <h5 class="text-center fw-bold">LAPORAN PESERTA DIDIK BARU</>
    <h5 class="text-center fw-bold">TAHUN PELAJARAN 2021/2022</>
    <br><br><br>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col" width="5%">No</th>
                <!-- <th scope="col">No Peserta</th> -->
                <th scope="col">Nama Lengkap</th>
                <th scope="col">NISN</th>
                <th scope="col">Tempat Tgl Lahir</th>
                <th scope="col">Jenis kelamin</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data_siswa as $siswa) {
            ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <!-- <td><?= $siswa['no_peserta']; ?></td> -->
                    <td><?= $siswa['nama_lengkap']; ?></td>
                    <td><?= $siswa['nisn']; ?></td>
                    <td><?= $siswa['tempat_lahir'] . ', ' . $siswa['tgl_lahir']; ?></td>
                    <td><?= $siswa['jk']; ?></td>
                    <td>
                        <?php
                        if ($siswa['status_lulus'] == 1) {
                            echo '<span class="badge badge-success">Lulus</span>';
                        } else {
                            echo '<span class="badge badge-warning">Belum Lulus</span>';
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
            if ($data_siswa == NULL) {
                echo '<tr>
                    <td colspan="8" class="text-center border-bottom">Data Kosong</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>

    <script>
        window.print();
    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>