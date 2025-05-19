<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Library</title>
</head>

<body>
    <?php
    $session = session();
    if ($session->has('logged_in')) {
        echo "Anda berhasil login, " . session()->get('username');
        echo "<br/>";
        echo '<a href="' . site_url('belajarlibrary/logout') . ' "name= " logout">LOGOUT</a>';
    } else {
        echo "Anda belum login";
        echo "<br>/";
        echo '<a href="' . site_url('belajarlibrary/login') . ' "name= " login">LOGIN</a>';
    }
    ?>
</body>

</html>