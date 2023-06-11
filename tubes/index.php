<?php
session_start();
if( isset($_SESSION['admin']) ) {
    header("Location: pages/admin/admin-view.php");
    exit;
}
if( isset($_SESSION['pengajar']) ) {
    header("Location: pages/pengajar/pengajar-view.php");
    exit;
}

$pengajar = [
    [
        "nama"      => "Dadi",
        "keahlian"   => "Bahasa Inggris dan Bahasa Indonesia",
        "profile"   => "pengajar1.jpg"
    ],
    [
        "nama"      => "Tise",
        "keahlian"   => "Kimia dan Biologi",
        "profile"   => "pengajar2.jpg"
    ],
    [
        "nama"      => "Dani",
        "keahlian"   => "Matematika dan Fisika",
        "profile"   => "pengajar3.jpg"
    ]
]



?>

<?php require('assets/parts/global-part/global-header.php'); ?>
<?php require('assets/parts/global-part/global-nav.php'); ?>

<style>
    .selengkapnya{
    text-align: center;
    }

    .selengkapnya button a{
        color: white;
        padding: 50px;
    }
</style>


<!-- About -->

<div id="Header" class="container">
    <div id="about" class="About">
        <h2 style="text-align: center; margin: 6rem 0 3rem ;">ABOUT US</h2>
        <div class="section">
            <div class="card mb-4" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/cardimg/private-study.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <p class="card-text">
                        Kami hadir dengan bertujuan untuk membantu anda dalam masalah pembelajaran dengan dibantu oleh
                        para pengajar profesional dan dengan cara penyampaian yang mudah dipahami.
                    </p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

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
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="selengkapnya">
            <button type="button" class="btn btn-primary"><a href="index.detail.php">Selengkapnya</a></button>
        </div>
    </div>
</div>

<!-- Conctact -->
<div class="container">
    <div id="contact" class="section">
        <h2 style="text-align: center; margin: 5rem 0 3rem;">CONTACT</h2>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Masukan Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" style="width: 25rem;" placeholder="contoh123@gmail.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Masukan pesan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 35rem;"></textarea>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Kirim</button>
    </div>
</div>

<?php require('assets/parts/global-part/global-footer.php') ?>
