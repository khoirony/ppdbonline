<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update Data Sekolah</h1>
    <br>

    <div class="row ml-3">

        <div class="col-md-5">

            <form class="user" method="POST" action="">

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah" value="<?= $sekolah['asal_sekolah']; ?>">
                    <?= form_error('asal_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="alamat_sekolah" name="alamat_sekolah" placeholder="Alamat Sekolah Asal" value="<?= $sekolah['alamat_sekolah']; ?>">
                    <?= form_error('alamat_sekolah', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <span class="pl-2">Status Sekolah Asal</span>
                <div class="form-group">
                    <select class="form-select form-select-lg rounded-pill fs-6" id="status_sekolah" name="status_sekolah" aria-label="Default select example">
                        <option value="Swasta">Swasta</option>
                        <option value="Negeri">Negeri</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="tahun_lulus" name="tahun_lulus" placeholder="Tahun Ijazah Lulus" value="<?= $sekolah['tahun_lulus']; ?>">
                    <?= form_error('tahun_lulus', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nomor_ijazah" name="nomor_ijazah" placeholder="Nomor Ijazah" value="<?= $sekolah['nomor_ijazah']; ?>">
                    <?= form_error('nomor_ijazah', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <span class="pl-2">Jalur Pendaftaran</span>
                <div class="form-group">
                    <select class="form-select form-select-lg rounded-pill fs-6" id="jalur" name="jalur" aria-label="Default select example">
                        <option value="Reguler">Reguler</option>
                        <option value="Kurang Mampu">Kurang Mampu</option>
                        <option value="Yatim Piatu">Yatim Piatu</option>
                    </select>
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