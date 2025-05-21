<?php echo form_open('mahasiswa/submit', 'id="form-mahasiswa"'); ?>
<div class="mt-3">
    <div class="card border-0">
        <div class="card-header">
            <h5>Form Mahasiswa</h5>
        </div>
        <div class="card-body p-4">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="Laki-laki" id="gender1">
                        <label for="gender1" class="form-check-label">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="Perempuan" id="gender2">
                        <label for="gender2" class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggalLahir">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" name="umur">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select name="jurusan" class="form-control" required>
                        <option value="Matematika">Matematika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Statistika">Statistika</option>
                        <option value="Farmasi">Farmasi</option>
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer p-3">
            <div class="d-flex flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<?php echo form_close(); ?>