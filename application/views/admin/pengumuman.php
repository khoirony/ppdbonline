<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('msg');
        if (isset($_SESSION['msg'])) {
            unset($_SESSION['msg']);
        } ?>
    <br>
    <div style="float: right;" class="mr-3 mb-2">
        <a class="btn btn-primary rounded-pill pl-3 pr-3" href="<?= base_url('Admin/kirim'); ?>">Kirim Pengumuman</a>
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
                <th scope="col" width="10%" class="text-center">Aksi</th>
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
                    <td class="text-center">
                        <?php
                        if ($siswa['status_lulus'] == 0) {
                            echo anchor('Admin/lulus/' . $siswa['id_siswa'], '<div class="btn btn-sm btn-success"><i class="fas fa-check-circle"></i></div>');
                        } else {
                            echo anchor('Admin/tidaklulus/' . $siswa['id_siswa'], '<div class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></div>');
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

</div>
<!-- /.container-fluid -->