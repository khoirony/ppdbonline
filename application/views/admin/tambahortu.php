<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Ortu</h1>
    <br>

    <div class="row ml-3">

        <div class="col-md-5">

            <form class="user" method="POST" action="">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <span class="pl-3">Nama Ayah</span>
                        <input type="text" class="form-control form-control-user" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah">
                        <?= form_error('ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" col-sm-6">
                        <span class="pl-3">Nama Ibu</span>
                        <input type="text" class="form-control form-control-user" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
                        <?= form_error('ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                
                <div class="form-group row mb-0">
                    <div class="col-sm-6">
                        <span class="pl-3">Pendidikan Ayah</span>
                        <div class="form-group">
                            <select class="form-select form-select-lg rounded-pill fs-6" id="pendidikan_ayah" name="pendidikan_ayah" aria-label="Default select example">
                                
                                <option value="SD">SD</option>
                                <option value="SLTP">SLTP</option>
                                <option value="SLTA">SLTA</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                            </select>
                            <?= form_error('pendidikan_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <span class="pl-3">Pendidikan Ibu</span>
                        <div class="form-group">
                            <select class="form-select form-select-lg rounded-pill fs-6" id="pendidikan_ibu" name="pendidikan_ibu" aria-label="Default select example">
                                
                                <option value="SD">SD</option>
                                <option value="SLTP">SLTP</option>
                                <option value="SLTA">SLTA</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                            </select>
                            <?= form_error('pendidikan_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <span class="pl-3">Pekerjaan Ayah</span>
                        <input type="text" class="form-control form-control-user" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah">
                        <?= form_error('pekerjaan_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="col-sm-6">
                        <span class="pl-3">Pekerjaan Ibu</span>
                        <input type="text" class="form-control form-control-user" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu">
                        <?= form_error('pekerjaan_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="penghasilan" name="penghasilan" placeholder="Penghasilan Perbulan">
                    <?= form_error('penghasilan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat Orang Tua">
                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nomor" name="nomor" placeholder="Nomor Telp Orang Tua">
                    <?= form_error('nomor', '<small class="text-danger pl-3">', '</small>'); ?>
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