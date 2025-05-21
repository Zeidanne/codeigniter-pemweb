<div class="d-flex flex justify-content-between mb-3">
    <a href="<?php echo site_url('mahasiswa/add') ?>">
        <button type="button" class="btn btn-primary">+ Tambah Mahasiswa</button>
    </a>
</div>
<table class="table table-responsive table-hover">
    <thead>
        <th class="text-center">No</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php if (isset($getData) && !empty($getData)) {
            $i = 1;
            foreach ($getData as $row) { ?>
                <tr>
                    <td class="text-center"><?= $i++ ?></td>
                    <td><?= $row->Nim ?></td>
                    <td><?= $row->Nama_Mhs ?></td>
                    <td><?= $row->Jenis_Kelamin ?></td>
                    <td><?= date('d/m/Y', strtotime($row->Tgl_Lahir)) ?></td>
                    <td>
                        <div class="d-flex flex justify-content-start gap-2">
                            <a href="<?php echo site_url('mahasiswa/edit/' . $row->Nim) ?>" class="btn btn-outline-info p-1 rounded-2" style="min-width: 34.67px;">
                                <i class="bi bi-pencil-square">Ubah</i>
                            </a>
                            <a href="<?php echo site_url('mahasiswa/delete/' . $row->Nim) ?>" class="btn btn-outline-danger p-1 rounded-2" style="min-width: 34.67px;">
                                <i class="bi bi-trash">Hapus</i>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="6" class="text-center text-muted">There's no data at the moment</td>
            </tr>
        <?php } ?>
    </tbody>
</table>