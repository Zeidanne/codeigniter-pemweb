<?php

echo form_open('mahasiswa/save', ['class' => 'form-horizontal']);
?>

<?php if (isset($error_message)) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $error_message; ?>
    </div>
<?php endif; ?>

<div style="margin-bottom: 15px;">
    <?= form_label('NIM', 'nim', ['class' => 'form-label']); ?>
    <?= form_input('nim', old('nim') ?? '', ['class' => 'form-control', 'placeholder' => 'Masukkan NIM', 'required' => 'required']); ?>
    <?php if (isset($validation) && $validation->hasError('nim')) : ?>
        <small class="text-danger"><?= $validation->getError('nim'); ?></small>
    <?php endif; ?>
</div>

<div style="margin-bottom: 15px;">
    <?= form_label('Nama', 'nama', ['class' => 'form-label']); ?>
    <?= form_input('nama', old('nama') ?? '', ['class' => 'form-control', 'placeholder' => 'Masukkan Nama', 'required' => 'required']); ?>
    <?php if (isset($validation) && $validation->hasError('nama')) : ?>
        <small class="text-danger"><?= $validation->getError('nama'); ?></small>
    <?php endif; ?>
</div>

<div style="margin-bottom: 15px;">
    <?= form_label('Jenis Kelamin', 'jenis_kelamin', ['class' => 'form-label']); ?>
    <?php
    $options = [
        'Laki-laki' => 'Laki-laki',
        'Perempuan' => 'Perempuan'
    ];
    ?>
    <?= form_dropdown('jenis_kelamin', $options, old('jenis_kelamin') ?? '', ['class' => 'form-control', 'required' => 'required']); ?>
    <?php if (isset($validation) && $validation->hasError('jenis_kelamin')) : ?>
        <small class="text-danger"><?= $validation->getError('jenis_kelamin'); ?></small>
    <?php endif; ?>
</div>

<div style="margin-bottom: 15px;">
    <?= form_label('Tanggal Lahir', 'tanggal_lahir', ['class' => 'form-label']); ?>
    <?= form_input('tanggal_lahir', old('tanggal_lahir') ?? '', ['class' => 'form-control', 'type' => 'date', 'required' => 'required']); ?>
    <?php if (isset($validation) && $validation->hasError('tanggal_lahir')) : ?>
        <small class="text-danger"><?= $validation->getError('tanggal_lahir'); ?></small>
    <?php endif; ?>
</div>

<div>
    <?= form_submit('submit', 'Simpan', ['class' => 'btn btn-primary']); ?>
</div>

<?php
echo form_close();
?>