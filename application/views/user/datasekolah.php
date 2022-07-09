<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <br>

    <div class="row">
        <div class="col-6">

            <div class="row pt-2">
                <div class="col-3">
                    Asal Sekolah
                </div>
                <div class="col-7">
                    : <?= $sekolah['asal_sekolah']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Alamat Sekolah
                </div>
                <div class="col-7">
                    : <?= $sekolah['alamat_sekolah']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3 pr-0">
                    Status Sekolah
                </div>
                <div class="col-7">
                    : <?= $sekolah['status_sekolah']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Tahun Lulus
                </div>
                <div class="col-7">
                    : <?= $sekolah['tahun_lulus']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Nomor Ijazah
                </div>
                <div class="col-7">
                    : <?= $sekolah['nomor_ijazah']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Jalur Pendaftaran
                </div>
                <div class="col-7">
                    : <?= $sekolah['jalur_pendaftaran']; ?>
                </div>
            </div>

            <br><br>
            <?php
            echo anchor('User/updatesekolah/' . $sekolah['id_sekolah'], '<div class="btn btn-sm btn-primary rounded-pill pl-3 pr-3">Edit Data</div>');
            ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->