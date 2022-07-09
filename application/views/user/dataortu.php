<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <br>

    <div class="row">
        <div class="col-6">

            <div class="row pt-2">
                <div class="col-3">
                    Nama Ayah
                </div>
                <div class="col-7">
                    : <?= $ortu['nama_ayah']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Nama Ibu
                </div>
                <div class="col-7">
                    : <?= $ortu['nama_ibu']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3 pr-0">
                    Pendidikan Ayah
                </div>
                <div class="col-7">
                    : <?= $ortu['pendidikan_ayah']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Pendidikan Ibu
                </div>
                <div class="col-7">
                    : <?= $ortu['pendidikan_ibu']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Pekerjaan Ayah
                </div>
                <div class="col-7">
                    : <?= $ortu['pekerjaan_ayah']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Pekerjaan Ibu
                </div>
                <div class="col-7">
                    : <?= $ortu['pekerjaan_ibu']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Penghasilan Perbulan
                </div>
                <div class="col-7">
                    : <?= $ortu['penghasilan_perbulan']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Alamat Orang Tua
                </div>
                <div class="col-7">
                    : <?= $ortu['alamat_ortu']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3">
                    Nomor Telp Ortu
                </div>
                <div class="col-7">
                    : <?= $ortu['nomor_ortu']; ?>
                </div>
            </div>

            <br><br>
            <?php
            echo anchor('User/updateortu/' . $ortu['id_ortu'], '<div class="btn btn-sm btn-primary rounded-pill pl-3 pr-3">Edit Data</div>');
            ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->