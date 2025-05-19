<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { padding: 8px 12px; border: 1px solid #ccc; text-align: left; }
        thead { background: #f4f4f4; }
    </style>
</head>
<body>

    <h1>Registrasi</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Registration Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($source as $row): ?>
                <tr>
                    <td><?= esc($row['name'])    ?></td>
                    <td><?= esc($row['email'])   ?></td>
                    <td><?= esc($row['status'])  ?></td>
                    <td><?= esc($row['regdate']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>
