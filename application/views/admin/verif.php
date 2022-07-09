<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    
    <?= $this->session->flashdata('msg');
        if (isset($_SESSION['msg'])) {
            unset($_SESSION['msg']);
        } ?>
    <br>
    <div class="mr-3 mb-2">
        <div class="row">
            <div class="col ps-3">
                <div class="col-7 border border-primary rounded-pill bg-white p-1">
                    <form class="d-inline-flex ms-3" method="POST" action="<?= base_url('Admin/caridata'); ?>">
                        <input type="text" class="border-0" id="cari" name="cari" placeholder="Masukkan nama..">
                        <button type="submit" class="btn btn-primary rounded-pill ps-3 pe-3 ms-4">
                            Cari
                        </button>
                    </form>
                </div>
            </div>
            <div class="col text-right">
                <a class="btn btn-primary rounded-pill pl-3 pr-3 mt-2" href="<?= base_url('Admin/tambahdata'); ?>">Tambah Data</a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" width="5%">No</th>
                <!-- <th scope="col">No Peserta</th> -->
                <th scope="col">Nama Lengkap</th>
                <th scope="col">NISN</th>
                <th scope="col">Tempat Tgl Lahir</th>
                <th scope="col">Jenis kelamin</th>
                <th scope="col">Status</th>
                <th scope="col" width="16%" class="text-center">Aksi</th>
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
                        if ($siswa['status_verif'] == 1) {
                            echo '<span class="badge badge-success">Sudah diverifikasi</span>';
                        } else {
                            echo '<span class="badge badge-danger">Belum diverifikasi</span>';
                        }
                        ?>
                    </td>
                    <td>
                        <a href="<?= base_url('Admin/lihat/' . $siswa['id_user']); ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('Admin/hapusdata/' . $siswa['id_user']); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        <?php
                        if ($siswa['status_verif'] == 0) {
                            echo anchor('Admin/setujui/' . $siswa['id_siswa'], '<div class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i></div>');
                        } else {
                            echo anchor('Admin/batalkan/' . $siswa['id_siswa'], '<div class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></div>');
                        }
                        ?>
                        <a href="<?= base_url('Admin/cetaksiswa/' . $siswa['id_user']); ?>" class="btn btn-sm btn-warning"><i class="fas fa-print"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>
<!-- /.container-fluid -->