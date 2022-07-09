<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<br>
    <div class="row">
        <div class="col-md-4">
            <?= $this->session->flashdata('msg');?>
        </div>
    </div>
    

	<div class="row">
		<div class="col-md-4">
			<form class="user" method="POST" action="<?= base_url('user/upload'); ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label class="form-label ml-3">Upload Ijazah/Surat Keterangan Lulus</label>
					<input type="file" id="ijazah" name="ijazah" class="form-control rounded-pill">
				</div>
				<div class="form-group">
					<label class="form-label ml-3">Upload Kartu Keluarga</label>
					<input type="file" id="kk" name="kk" class="form-control rounded-pill">
				</div>
				<div class="form-group">
					<label class="form-label ml-3">Upload Akta Kelahiran</label>
					<input type="file" id="akta" name="akta" class="form-control rounded-pill">
				</div>

				<button type="submit" class="btn btn-primary btn-user btn-block">
					Submit
				</button>
			</form>
		</div>
        <div class="col-md-3">

        </div>
		<div class="col-md-5">
            <?php 
            if($cekberkas == 0){
                echo '
                Status <br><br>
                Upload Ijazah/SKL : <br>
                Upload Kartu Keluarga : <br>
                Upload Akta Kelahiran :  ';
            }else{
                ?>
                Status <br><br>
                Upload Ijazah/SKL : 

                <?php 
                if ($berkas['ijazah'] != '') {
                    echo '<span class="badge badge-success">Sudah diupload</span>';
                } else {
                    echo '<span class="badge badge-danger">Belum diupload</span>';
                } ?> <br>
                Upload Kartu Keluarga : 
                <?php 
                if ($berkas['kk'] != '') {
                    echo '<span class="badge badge-success">Sudah diupload</span>';
                } else {
                    echo '<span class="badge badge-danger">Belum diupload</span>';
                } ?> <br>
                Upload Akta Kelahiran : 
                <?php 
                if ($berkas['akta'] != '') {
                    echo '<span class="badge badge-success">Sudah diupload</span>';
                } else {
                    echo '<span class="badge badge-danger">Belum diupload</span>';
                } 
            }?>
		</div>
	</div>


</div>
<!-- /.container-fluid -->
