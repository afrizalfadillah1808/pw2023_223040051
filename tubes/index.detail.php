<?php
$pengajar = [
    [
        "nama"      => "Dadi",
        "keahlian"   => "Bahasa Inggris dan Bahasa Indonesia",
        "profile"   => "pengajar1.jpg",
        "deskripsi" => "Pengajar ini memiliki lebih banyak pengalaman yang sangat luar biasa"
    ],
    [
        "nama"      => "Tise",
        "keahlian"   => "Kimia dan Biologi",
        "profile"   => "pengajar2.jpg",
        "deskripsi" => "Pengajar dengan lulusan terbaik dari Universitas Harvard"
    ],
    [
        "nama"      => "Dani",
        "keahlian"   => "Matematika dan Fisika",
        "profile"   => "pengajar3.jpg",
        "deskripsi" => "Pengajar dengan nilai yang didapatkan sempurna"
    ]
]
?>

<?php require('assets/parts/global-part/global-header.php'); ?>
<?php require('assets/parts/global-part/global-nav.php'); ?>


<!-- Pengajar -->

<div class="container">
    <div id="pengajar" class="pengajar">
        <h2 style="text-align: center; margin: 5rem 0 3rem ;">PENGAJAR TERBAIK</h2>
        <div class="section">
            <di class="row">
                <?php foreach ($pengajar as $pgr) : ?>
                <div class="card" style="width: 18rem; margin-bottom: 2rem; margin-left: 4.5rem;">
                    <img src="img/Pengajarimg/<?= $pgr["profile"];?>" class="card-img-top" alt="<?= $pgr["nama"]?>">
                    <div class="card-body">
                    <h5 class="card-title"><?= $pgr["nama"]; ?></h5>
                    <p class="card-text"><?= $pgr["keahlian"]; ?></p>
                    <p class="card-text"><?= $pgr["deskripsi"]; ?></p>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<?php require('assets/parts/global-part/global-footer.php') ?>
