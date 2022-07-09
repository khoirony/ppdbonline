<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Data</h1>
    <?= $this->session->flashdata('msg');
        if (isset($_SESSION['msg'])) {
            unset($_SESSION['msg']);
        } ?>
    <br>

    <div class="row ml-3">
        <div class="col-5">
            <div class="form-inline">
                <h5>Data Siswa <?php
                echo anchor('admin/editsiswa/' . $siswa['id_siswa'], '<span class="badge bg-primary ml-3">Edit Data</span>');
                ?>
                </h5>
            </div>
            <br>
            <div class="row pt-2">
                <div class="col-4">
                    Nama Lengkap
                </div>
                <div class="col-8">
                    : <?= $siswa['nama_lengkap']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    NISN
                </div>
                <div class="col-8">
                    : <?= $siswa['nisn']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Tempat, Tgl Lahir
                </div>
                <div class="col-8">
                    : <?= $siswa['tempat_lahir']; ?>, <?= $siswa['tgl_lahir']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Jenis Kelamin
                </div>
                <div class="col-8">
                    : <?= $siswa['jk']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Anak ke
                </div>
                <div class="col-8">
                    : <?= $siswa['anak_ke']; ?> dari <?= $siswa['jumlah_saudara']; ?> Bersaudara
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Agama
                </div>
                <div class="col-8">
                    : <?= $siswa['agama']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Alamat
                </div>
                <div class="col-8">
                    : <?= $siswa['alamat']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Hobi
                </div>
                <div class="col-8">
                    : <?= $siswa['hobi']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Cita Cita
                </div>
                <div class="col-8">
                    : <?= $siswa['cita_cita']; ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Jarak Rumah
                </div>
                <div class="col-8">
                    : <?= $siswa['jarak_rumah']; ?>m
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Transportasi
                </div>
                <div class="col-8">
                    : <?= $siswa['transportasi']; ?>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="form-inline">
                <h5>Data Ortu <?php if($cekortu == 1){ 
                    echo anchor('Admin/editortu/' . $ortu['id_ortu'], '<span class="badge bg-primary ml-3">Edit Data</span>');
                }else{
                    echo anchor('Admin/tambahortu/' . $siswa['id_user'], '<span class="badge bg-primary ml-3">Edit Data</span>');
                }
                ?>
                </h5>
            </div>
            <br>
            <div class="row pt-2">
                <div class="col-4">
                    Nama Ayah
                </div>
                <div class="col-8">
                    : <?php if($cekortu == 1){ echo $ortu['nama_ayah']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Pendidikan Ayah
                </div>
                <div class="col-8">
                    : <?php if($cekortu == 1){ echo $ortu['pendidikan_ayah']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4 pr-0">
                    Pekerjaan Ayah
                </div>
                <div class="col-8">
                    : <?php if($cekortu == 1){ echo  $ortu['pekerjaan_ayah']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Nama Ibu
                </div>
                <div class="col-8">
                    : <?php if($cekortu == 1){ echo $ortu['nama_ibu']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Pendidikan Ibu
                </div>
                <div class="col-8">
                    : <?php if($cekortu == 1){ echo $ortu['pendidikan_ibu']; } ?> 
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Pekerjaan Ibu
                </div>
                <div class="col-8">
                    : <?php if($cekortu == 1){ echo $ortu['pekerjaan_ibu']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Penghasilan Perbulan
                </div>
                <div class="col-8">
                    : <?php if($cekortu == 1){ echo $ortu['penghasilan_perbulan']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Alamat Ortu
                </div>
                <div class="col-8">
                    : <?php if($cekortu == 1){ echo $ortu['alamat_ortu']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Nomor Telp Ortu
                </div>
                <div class="col-8">
                    : <?php if($cekortu == 1){ echo $ortu['nomor_ortu']; } ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>

    <div class="row ml-3">
        <div class="col-5">
            <div class="form-inline">
                <h5>Data Sekolah <?php if($ceksekolah == 1){ 
                    echo anchor('Admin/editsekolah/' . $sekolah['id_sekolah'], '<span class="badge bg-primary ml-3">Edit Data</span>');
                }else{
                    echo anchor('Admin/tambahsekolah/' . $siswa['id_user'], '<span class="badge bg-primary ml-3">Edit Data</span>');
                }
                
                ?>
                </h5>
            </div>
            <br>
            <div class="row pt-2">
                <div class="col-4">
                    Asal Sekolah
                </div>
                <div class="col-8">
                    : <?php if($ceksekolah == 1){ echo  $sekolah['asal_sekolah']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Alamat Sekolah
                </div>
                <div class="col-8">
                    : <?php if($ceksekolah == 1){ echo  $sekolah['alamat_sekolah']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Status Sekolah
                </div>
                <div class="col-8">
                    : <?php if($ceksekolah == 1){ echo  $sekolah['status_sekolah']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Tahun Lulus
                </div>
                <div class="col-8">
                    : <?php if($ceksekolah == 1){ echo  $sekolah['tahun_lulus']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Nomor Ijazah
                </div>
                <div class="col-8">
                    : <?php if($ceksekolah == 1){ echo  $sekolah['nomor_ijazah']; } ?>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-4">
                    Jalur Pendaftaran
                </div>
                <div class="col-8">
                    : <?php if($ceksekolah == 1){ echo  $sekolah['jalur_pendaftaran']; } ?>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="form-inline">
                <h5>Berkas Pendukung</h5>
            </div>
            <br>
            <?php if($cekberkas == 1){ 
            ?>
            <div class="row pt-2">
                <div class="col-4">
                    Ijazah<br>
                    <?php if($ijazah == 0){ 
                        ?>
                        <img src="<?= base_url('assets/img/berkas/' . $berkas['ijazah']); ?>" width="150" alt="ijazah" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body mx-auto">
                                    <img src="<?= base_url('assets/img/berkas/' . $berkas['ijazah']); ?>" alt="ijazah" class="img-thumbnail">
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }else{
                        echo "belum diupload";
                    }
                    ?>
                    
                </div>
                <div class="col-4">
                    Kartu Keluarga<br>
                    <?php if($kk == 0){ 
                    ?>
                        <img src="<?= base_url('assets/img/berkas/' . $berkas['kk']); ?>" width="150" alt="kk" type="button" data-bs-toggle="modal" data-bs-target="#ModalKK">

                        <!-- Modal -->
                        <div class="modal fade" id="ModalKK" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body mx-auto">
                                    <img src="<?= base_url('assets/img/berkas/' . $berkas['kk']); ?>" alt="kk" class="img-thumbnail">
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }else{
                        echo "belum diupload";
                    }
                    ?>
                </div>
                <div class="col-4">
                    Akta Kelahiran<br>
                    <?php if($akta == 0){ 
                    ?>
                        <img src="<?= base_url('assets/img/berkas/' . $berkas['akta']); ?>" width="150" alt="akta" type="button" data-bs-toggle="modal" data-bs-target="#ModalAkta">

                        <!-- Modal -->
                        <div class="modal fade" id="ModalAkta" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body mx-auto">
                                    <img src="<?= base_url('assets/img/berkas/' . $berkas['akta']); ?>" class="img-thumbnail" alt="akta">
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }else{
                        echo "belum diupload";
                    }
                    ?>
                </div>
            </div>
            <?php
            }else{
                echo "-belum ada berkas apapun-";
            }
            ?>
        </div>
    </div>
    <br>
</div>
<!-- /.container-fluid -->

