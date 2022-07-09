<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3 class="text-center fw-bold">SURAT KETERANGAN KELULUSAN</h3><br><br>

    <div class="mx-5 px-5 text-start fw-normal">
      <div class="mx-5 ">
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
        <p class="">Demikian surat keterangan pemberitahuan ini, agar dapat digunakan sebagaimana mestinya
        </p>
        <br><br>
        <a href="<?= base_url('user/cetakpengumuman');?>" class="btn btn-primary rounded-pill px-4">Cetak</a>
      </div><br><br>
    </div>


</div>
<!-- /.container-fluid -->