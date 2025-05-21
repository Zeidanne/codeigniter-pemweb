<?php echo form_open('mahasiswa/update/'.$getData->Nim, 'id="form-mahasiswa"'); ?>
<div class="mt-3">
    <div class="card border-0">
        <div class="card-header">
            <h5>Form Mahasiswa</h5>
        </div>
        <div class="card-body p-4">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim" value="<?= $getData->Nim ?>">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value ="<?= $getData->Nama_Mhs?>">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value ="Laki-laki" id="gender1"
                        <?= ($getData->Jenis_Kelamin == 'Laki-laki') ? 'checked' : '' ?>>
                        <label for="gender1" class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value ="Perempuan" id="gender2"
                        <?= ($getData->Jenis_Kelamin == 'Perempuan') ? 'checked' : '' ?>>
                        <label for="gender2" class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggalLahir" value ="<?= $getData->Tgl_Lahir ?>">
                </div>
            </div>
        </div>
        <div class="card-footer p-3">
            <div class="d-flex flex justify-content-end">
                <button type="update" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<?php echo form_close(); ?>