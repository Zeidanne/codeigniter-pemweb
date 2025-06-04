<div class="d-flex flex justify-content-end mb-3">
    <a href="<?php echo site_url('dosen/add') ?>">+ Add Dosen</a>
</div>
<table class="table table-responsive table-hover">
    <thead>
        <th class="text-center">No</th>
        <th>NIP</th>
        <th>Nama Dosen</th>
        <th>Bidang Ilmu</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php if (isset($getData) && !empty($getData)) {
            $i = 1; foreach ($getData as $row) { ?>
            <tr>
                <td class="text-center"><?= $i++ ?></td>
                <td><?= $row->nip ?></td>
                <td><?= $row->nama_dosen ?></td>
                <td><?= $row->bidang_ilmu ?></td>
                <td>
                    <div class="d-flex flex justify-content-start gap-2">
                        <a href="<?php echo site_url('dosen/edit/'.$row->id_dosen) ?>" class="btn btn-outline-info p-1 rounded-2" style="min-width: 34.67px;">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="<?php echo site_url('dosen/delete/'.$row->id_dosen) ?>" class="btn btn-outline-danger p-1 rounded-2" style="min-width: 34.67px;">
                            <i class="bi bi-trash"></i>
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