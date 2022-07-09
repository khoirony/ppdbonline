<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row text-white pt-3 pb-5 justify-content-center">
        <div class="card bg-info col-5 mr-5">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h5 class="card-title">Jumlah Calon Siswa yang Mendaftar</h5>
                <div class="display-4">
                    <?= $hitung_siswa; ?>
                </div>
                <a href="<?= base_url('Admin/verif'); ?>">
                    <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>

        <div class="card bg-success col-5">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h5 class="card-title">Jumlah Siswa yang Lulus</h5>
                <div class="display-4">
                    <?= $hitung_lulus; ?>
                </div>
                <a href="<?= base_url('Admin/pengumuman'); ?>">
                    <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p>
                </a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->