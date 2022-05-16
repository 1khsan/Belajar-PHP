<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY ASSOCIATION</title>
    <style>
    .kotak {
        width: 30px;
        height: 30px;
        line-height: 30px;
        background: #BADA55;
        text-align: center;
        margin: 3px;
        transition: 1s;
        float: left;
    }

    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }

    .clear {
        clear: both;
    }
    </style>
</head>

<body>
    <?php 
    $mahasiswa = [
        [
            "nim" => 0110221327,
            "nama" => "ihsan",
            "email" => "oplikhsan@gmail.com",
            "umur" => 19,
            "jurusan" => "Teknik Informatika",
            "gambar" => "gambar1.png"
        ],
        [
            "nim" => 0110221330,
            "nama" => "ahmad",
            "email" => "ahmad@gmail.com",
            "umur" => 19,
            "jurusan" => "Teknik Informatika",
            "gambar" => "gambar2.jpg"
        ]
        ]; ?>
    <?php foreach($mahasiswa as $mhs){?>

    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nim : <?= $mhs["nim"]; ?></li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Umur : <?= $mhs["umur"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php }?>
</body>

</html>

</html>