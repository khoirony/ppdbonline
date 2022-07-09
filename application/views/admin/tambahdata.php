<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Baru</h1>
    <br>

    <div class="row ml-3">

        <div class="col-md-5">

            <form class="user" method="POST" action="">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Next
                </button>

            </form>
            <br>
        </div>

    </div>

</div>
<!-- /.container-fluid -->