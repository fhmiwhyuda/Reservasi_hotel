<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>
<body>
    <form action="<?= base_url('Auth/addusers') ?>" method="post">
        <input type="text" name="username" placeholder="Masukkan Username"><br><br>
        <input type="text" name="Nama" placeholder="Masukkan Nama lengkap"><br><br>
        <input type="text" name="Jenis_kelamin" placeholder="Masukkan jenis kelamin"><br><br>
        <input type="date" name="tgllahir"><br><br>
        <input type="text" name="nowa" placeholder="Masukkan kontak"><br><br>
        <input type="password" name="password" placeholder="Masukkan Password"><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>