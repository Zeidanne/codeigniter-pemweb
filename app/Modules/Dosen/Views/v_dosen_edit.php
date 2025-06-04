<?php echo form_open('dosen/update/'.$getData->id_dosen, 'id="form-dosen"'); ?>
<div class="mt-3">
    <div class="card border-0">
        <div class="card-header">
            <h5>Form Dosen</h5>
        </div>
        <div class="card-body p-4">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" name="nip" value="<?= $getData->nip ?>">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="nama" class="form-label">Nama Dosen</label>
                    <input type="text" class="form-control" name="nama" value ="<?= $getData->nama_dosen?>">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="bidang" class="form-label">Bidang Ilmu</label>
                    <input type="text" class="form-control" name="bidang" value ="<?= $getData->bidang_ilmu?>">
                </div>
            </div>
        </div>
        <div class="card-footer p-3">
            <div class="d-flex flex justify-content-end">
                <button type="update" class="btn btn-primary">Modify</button>
            </div>
        </div>
    </div>
</div>

<?php echo form_close(); ?>