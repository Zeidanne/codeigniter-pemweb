<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>

<body>
    <div>
        <h2>Mahasiswa</h2>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($mahasiswa)) : ?>
                <?php foreach ($mahasiswa as $index => $mhs) : ?>
                    <tr>
                        <th scope="row"><?= $index + 1; ?></th>
                        <td><?= esc($mhs['nim']); ?></td>
                        <td><?= esc($mhs['nama']); ?></td>
                        <td><?= esc($mhs['jenis_kelamin']); ?></td>
                        <td><?= esc($mhs['tanggal_lahir']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5">Belum ada data mahasiswa.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <a href="<?= base_url('mahasiswa/add'); ?>">
        <button>Tambah Data</button>
    </a>
</body>

</html>