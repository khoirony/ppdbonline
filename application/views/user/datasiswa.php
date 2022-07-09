<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <br>

    <div class="row">
        <div class="col-6">

            <div class="row pt-2">
                <div class="col-3">
                    Nama Lengkap
                </div>
                <div class="col-7">
                    : <?= $siswa['nama_lengkap']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    NISN
                </div>
                <div class="col-7">
                    : <?= $siswa['nisn']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3 pr-0">
                    Tempat, Tgl Lahir
                </div>
                <div class="col-7">
                    : <?= $siswa['tempat_lahir']; ?>, <?= $siswa['tgl_lahir']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Jenis Kelamin
                </div>
                <div class="col-7">
                    : <?= $siswa['jk']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Anak ke
                </div>
                <div class="col-7">
                    : <?= $siswa['anak_ke']; ?> dari <?= $siswa['jumlah_saudara']; ?> Bersaudara
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Agama
                </div>
                <div class="col-7">
                    : <?= $siswa['agama']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Alamat
                </div>
                <div class="col-7">
                    : <?= $siswa['alamat']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Hobi
                </div>
                <div class="col-7">
                    : <?= $siswa['hobi']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Cita Cita
                </div>
                <div class="col-7">
                    : <?= $siswa['cita_cita']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Jarak Rumah
                </div>
                <div class="col-7">
                    : <?= $siswa['jarak_rumah']; ?>m
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Transportasi
                </div>
                <div class="col-7">
                    : <?= $siswa['transportasi']; ?>
                </div>
            </div>
            <br><br>
            <?php
            echo anchor('User/updatesiswa/' . $siswa['id_siswa'], '<div class="btn btn-sm btn-primary rounded-pill pl-3 pr-3">Edit Data</div>');
            ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->