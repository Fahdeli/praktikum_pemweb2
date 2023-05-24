<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form Handling</title>
    <style>
        body {
            background :black;
        }
        h1, h2, h3, h4, h5, p, span, label {
            color:#fff;
        }
        .btn-kirim {
            background:green;
            color:white;
            padding:5px;
            border:0;
            border-radius:10px;
        }
        .btn-reset {
            background:red;
            color:white;
            padding:5px;
            border:0;
            border-radius:10px;
        }
        </style>
</head>
<body>
    <h1>form pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="POST">
        <!----- tipe teks -----> 
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>
        <!----- tipe radio ----->
        <label for="">jenis kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki"><label for="">Laki-laki</label><br>
        <input type="radio" name="Jenis_Kelamin" value="Perempuan"><label for="">Perempuan</label><br><br>
        <!----- tipe checkbox ----->
        <label for="">Mata kuliah</label><br>
        <input type="checkbox" name="matkul" value="Matkom">
             <label for="">Matkom</label><br>
        <input type="checkbox" name="matkul" value="Pemweb 2">
             <label for="">Pemweb 2</label><br><br>
        <!-- tipe number -->
            <label for="">NO Telpon</label>
        <input type="number" name="nomer_telepon"><br><br>
        <!-- button -->
        <button type="submit" class="btn-k">Kirim</button>
        <button type="reset" class="btn-r">Reset data</button>
    </form>
</body>
</html>