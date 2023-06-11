<?php  
$mahasiswa = [
    [
        "nama"      => "Arya Saputra",
        "nrp"       => 223040051,
        "email"     => "aryasaputra1304@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "profile"   => "profile_default1.png"
    ],
    [
        "nama"      => "Ahmad Suherman",
        "nrp"       => 223040066,
        "email"     => "suherman27@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "profile"   => "profile_default1.png"
    ],
    [
        "nama"      => "Naufal Zul Faza",
        "nrp"       => 223040161,
        "email"     => "naufa121@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "profile"   => "profile_default1.png"
    ],
    [
        "nama"      => "Irsan Moch. Taupik Febrian",
        "nrp"       => 223040076,
        "email"     => "irsan321@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "profile"   => "profile_default1.png"
    ],
    [
        "nama"      => "Flavio Boni",
        "nrp"       => 223040053,
        "email"     => "boni.321@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "profile"   => "profile_default1.png"
    ],
    [
        "nama"      => "Lisvindanu",
        "nrp"       => 223040038,
        "email"     => "danuuu657@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "profile"   => "profile_default1.png"
    ],
    [
        "nama"      => "Fakih Helmi Maulana",
        "nrp"       => 223040056,
        "email"     => "hikaf890@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "profile"   => "profile_default1.png"
    ],
    [
        "nama"      => "Adi Rachmansyah",
        "nrp"       => 223040078,
        "email"     => "adra679@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "profile"   => "profile_default1.png"
    ],
    [
        "nama"      => "Bima Hafit Prakoso",
        "nrp"       => 223040088,
        "email"     => "Bima790@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "profile"   => "profile_default1.png"
    ],
    [
        "nama"      => "Anggi Mauliya Cendy",
        "nrp"       => 223040064,
        "email"     => "AnggiMC638@gmail.com",
        "jurusan"   => "Teknik Informatika",
        "profile"   => "profile_default1.png"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h1 style="margin-bottom: 3rem; text-align: center;">Daftar Mahasiswa</h1>
    <div class="row">
    <?php foreach($mahasiswa as $mhs) : ?>

        <div class="card" style="width: 18rem; margin-bottom: 2rem; margin-left: 3rem;">
            <img src="img/<?= $mhs["profile"];?>" class="card-img-top" alt="profile img">
                <div class="card-body">
                    <p class="card-text">
                        Nama    :<?= $mhs["nama"]; ?> <br>
                        NRP     :<?= $mhs["nrp"]; ?> <br>
                        Email   :<?= $mhs["email"]; ?> <br>
                        Jurusan :<?= $mhs["jurusan"]; ?>
                    </p>
                </div>
        </div>

    <?php endforeach ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</body>
</html>