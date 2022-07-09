<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update Data Siswa</h1>
    <br>

    <div class="row ml-3">

        <div class="col-md-5">

            <form class="user" method="POST" action="">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="<?= $user['name']; ?>" value="<?= $user['name']; ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nisn" name="nisn" placeholder="NISN" value="<?= $siswa['nisn']; ?>">
                    <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <span class="pl-3">Tempat, Tanggal Lahir</span>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $siswa['tempat_lahir']; ?>">
                        <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-6">
                        <input type="date" class="form-control form-control-user" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $siswa['tgl_lahir']; ?>">
                        <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="jk" name="jk" placeholder="Jenis Kelamin" value="<?= $siswa['jk']; ?>">
                    <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="anak_ke" name="anak_ke" placeholder="Anak ke" value="<?= $siswa['anak_ke']; ?>">
                    <?= form_error('anak_ke', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="jumlah_saudara" name="jumlah_saudara" placeholder="Jumlah Saudara" value="<?= $siswa['jumlah_saudara']; ?>">
                    <?= form_error('jumlah_saudara', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="agama" name="agama" placeholder="Agama" value="<?= $siswa['agama']; ?>">
                    <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= $siswa['alamat']; ?>">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="hobi" name="hobi" placeholder="Hobi" value="<?= $siswa['hobi']; ?>">
                    <?= form_error('hobi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="cita_cita" name="cita_cita" placeholder="Cita Cita" value="<?= $siswa['cita_cita']; ?>">
                    <?= form_error('cita_cita', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="jarak_rumah" name="jarak_rumah" placeholder="Jarak Rumah ke Sekolah" value="<?= $siswa['jarak_rumah']; ?>">
                    <?= form_error('jarak_rumah', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class=" form-group">
                    <input type="text" class="form-control form-control-user" id="transportasi" name="transportasi" placeholder="Transportasi ke Sekolah" value="<?= $siswa['transportasi']; ?>">
                    <?= form_error('transportasi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Submit
                </button>

            </form>
            <br>
        </div>

    </div>

</div>
<!-- /.container-fluid -->