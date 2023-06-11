<?php 

define('BASE_URL', '/pw2023_223040051/tubes');
// Database connect
$cdb = mysqli_connect('localhost', 'root', '', 'sokuni') or die('Connection Failed');


// 
// PENGAJAR
// 

// show
function query_pengajar($query) {
    global $cdb;
    $result = mysqli_query($cdb, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function jumlah_pengajar($query) {
    global $cdb;
    $result = mysqli_query($cdb, $query);
    $row = mysqli_fetch_assoc($result);
    return $row;
}


// add-pengajar
function add_pengajar($data) {
    global $cdb;

    $username = htmlspecialchars(strtolower(stripcslashes($data["username"])));
    $password = htmlspecialchars(mysqli_real_escape_string($cdb, $data["password"]));
    $password2 = htmlspecialchars(mysqli_real_escape_string($cdb, $data["password2"]));
    $nip = htmlspecialchars($data["nip"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);

    $gambar = upload_pengajar();

    if( $password !== $password2 ) {
        echo "<script>
                alert('Password Tidak sama');
             </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    if ( !$gambar ) {
        return false;
    }

    $add = "INSERT INTO `pengajar` 
                        (`username`, `password`, `nama_pengajar`, `email`, `foto`, `nip`) 
                        VALUES 
                        ('$username', '$password', '$nama', '$email', '$gambar', '$nip')";
    mysqli_query($cdb, $add);
    return mysqli_affected_rows($cdb);
}

// delete-pengajar
function delete_pengajar($id) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM pengajar 
                        WHERE id = $id");

    return mysqli_affected_rows($cdb);
}

function delete_jadwal($id) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM pengajar WHERE id = $id");

    return mysqli_affected_rows($cdb);
}

function delete_fk($id) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM pengajar_pelajaran where id_pengajar = $id");

    return mysqli_affected_rows($cdb);
}

// Update-pengajar
function update_pengajar($update) {
    global $cdb;
    $id = $update["id"];
    $nip = htmlspecialchars($update["nip"]);
    $nama = htmlspecialchars($update["nama"]);
    $email = htmlspecialchars($update["email"]);
    $oldfoto = $update["oldfoto"];


    if( $_FILES['foto']['error'] === 4) {
        $foto = $oldfoto;
    } else {
        $foto = upload_pengajar();
    }
    

    $update = "UPDATE pengajar SET 
                nama_pengajar = '$nama',
                foto = '$foto',
                email = '$email',
                nip = '$nip'
            WHERE id = $id
            ";
    mysqli_query($cdb, $update);

    return mysqli_affected_rows($cdb);
}

// search-pengajar
function search_pengajar($keyword) {
    $query = " SELECT * FROM pengajar
                WHERE 
                nama_pengajar LIKE '%$keyword%' OR
                nip LIKE '%$keyword%' OR
                email LIKE '%$keyword%'";

    return query_pengajar($query);
}

// upload-pengajar
function upload_pengajar() {
    $filename = $_FILES['foto']['name'];
    $size = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];


    $EkstensionValidImage = ['jpg', 'jpeg', 'png'];
    $EkstensionImage = explode('.', $filename);
    $EkstensionImage = strtolower(end($EkstensionImage));

    if (!in_array($EkstensionImage, $EkstensionValidImage)) {
        echo "<script>
                alert('Gambar yang anda upload tidak valid!');        
            </script>";
        return false;
    }

    if( $size > 3000000) {
        echo "<script>
                alert('Ukuran gambar tidak bisa diatas 3MB!');        
            </script>";
        return false;
    }

    $newfilename = uniqid();
    $newfilename .= '.';
    $newfilename .= $EkstensionImage; 

    move_uploaded_file($tmpname, '../../img/pengajarimg/' . $newfilename);

    return $newfilename;

}

// Tambah-ebook
function add_ebook($data) {
    global $cdb;
    $doc = upload_pengajar_ebook();

    if( !$doc ) {
        return false;
    }

    $add = "INSERT INTO ebook 
                        (`ebook`) 
                        VALUES 
                        ('$doc')";

    mysqli_query($cdb, $add);
    return mysqli_affected_rows($cdb);
}
// upload-ebook
function upload_pengajar_ebook() {
    $filename = $_FILES['ebook']['name'];
    $size = $_FILES['ebook']['type'];
    $error = $_FILES['ebook']['error'];
    $tmpname = $_FILES['ebook']['tmp_name'];

    $EkstensionValidDoc = ['pdf'];
    $EkstensionDoc = explode('.', $filename);
    $EkstensionDoc = strtolower(end($EkstensionDoc));

    if (!in_array($EkstensionDoc, $EkstensionValidDoc)) {
        echo "<script>
                alert('Dokumen yang anda upload tidak valid!');
            </script>";
        return false;
    }

    move_uploaded_file($tmpname, '../../ebook/' . $filename);

    return $filename;
}

// kategori
function kategori($id) {
    global $cdb;
    // var_dump($id); die();
    $ide = $id["ide"];
    $idk = $id["kategori"];
    
    $result = "INSERT INTO ebook_kategori
                            (id_ebook, id_kategori)
                            VALUES
                            ($ide, $idk)";

    mysqli_query($cdb, $result);

    return mysqli_affected_rows($cdb);
}

function pelajaran($id) {
    global $cdb;
    // var_dump($id); die();
    $idp = $id["idp"];
    $idl = $id["pelajaran"];
    
    $result = "INSERT INTO pengajar_pelajaran
                            (id_pengajar, id_pelajaran)
                            VALUES
                            ($idp, $idl)";

    mysqli_query($cdb, $result);

    return mysqli_affected_rows($cdb);
}

// delete-ebook
function delete_ebook($id) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM ebook WHERE id = $id");

    return mysqli_affected_rows($cdb);
}

function delete_fkebook($id) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM ebook_kategori where id_ebook = $id");

    return mysqli_affected_rows($cdb);
}

// search-ebook
function search_ebook($keyword) {
    $query = "SELECT * FROM ebook
                WHERE 
                ebook LIKE '%{$keyword}%' OR
                kategori_buku LIKE '%{$keyword}%'";

    return query_pengajar($query);
}


// add-jadwal
function add_jadwal($time) {
    global $cdb;

    $date = htmlspecialchars($time["date"]);
    $jmasuk = htmlspecialchars($time["jmasuk"]);
    $jkeluar = htmlspecialchars($time["jkeluar"]);

    $result = "INSERT INTO `jadwal` 
                            (`tanggal_masuk`, `jam_masuk`, `jam_keluar`)
                            VALUES 
                            ('$date', '$jmasuk', '$jkeluar');";
    mysqli_query($cdb, $result);

    return mysqli_affected_rows($cdb);
}



// 
// END-PENGAJAR
// 


// 
// SISWA
// 

// show
function query_siswa($query) {
    global $cdb;
    $result = mysqli_query($cdb, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function jumlah_siswa($query) {
    global $cdb;
    $result = mysqli_query($cdb, $query);
    $row = mysqli_fetch_assoc($result);
    return $row;
}



// add-siswa
function registration_siswa($data) {
    global $cdb;
    $username = htmlspecialchars($data["username"]);
    $password = mysqli_real_escape_string($cdb, $data["password"]);
    $password2 = mysqli_real_escape_string($cdb, $data["password2"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);


    if( $password !== $password2 ) {
        echo "<script>
                alert('Password Tidak sama');
             </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    $add = "INSERT INTO `siswa` 
                        (`username`, `password`, `nama_user`, `email`, `foto`) 
                         VALUES 
                        ('$username', '$password', '$nama', '$email', null)";
    mysqli_query($cdb, $add);
    return mysqli_affected_rows($cdb);
}


// delete-siswa
function delete_siswa($siswa) {
    global $cdb;
    mysqli_query($cdb, "DELETE FROM siswa WHERE id=$siswa");

    return mysqli_affected_rows($cdb);
}


// search-siswa
function search_siswa($keyword) {
    $query = " SELECT * FROM siswa
                WHERE 
                nama_user LIKE '%$keyword%' OR
                email LIKE '%$keyword%'";

    return query_siswa($query);
}

function update_siswa($update) {
    
    global $cdb;
    $id = $update["id"];
    $nama = htmlspecialchars($update["nama"]);
    $username = htmlspecialchars($update["username"]);
    $email = htmlspecialchars($update["email"]);
    $oldfoto = $update["oldfoto"];

    
    if ($_FILES['gambar']['error'] === 4) {
        $foto = $oldfoto;
    } else {
        $foto = upload_siswa();
    }
    

    $update = "UPDATE siswa SET 
                username = '$username',
                nama_user = '$nama',
                email = '$email',
                foto = '$foto'
               WHERE id = $id
            ";
    mysqli_query($cdb, $update);

    return 1;
    return mysqli_affected_rows($cdb);
}

// upload-siswa
function upload_siswa() {
    $filename = $_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];


    $EkstensionValidImage = ['jpg', 'jpeg', 'png'];
    $EkstensionImage = explode('.', $filename);
    $EkstensionImage = strtolower(end($EkstensionImage));

    if (!in_array($EkstensionImage, $EkstensionValidImage)) {
        echo "<script>
                alert('Gambar yang anda upload tidak valid!');        
            </script>";
        return false;
    }

    if( $size > 3000000) {
        echo "<script>
                alert('Ukuran gambar tidak bisa diatas 3MB!');        
            </script>";
        return false;
    }

    $newfilename = uniqid();
    $newfilename .= '.';
    $newfilename .= $EkstensionImage; 

    move_uploaded_file($tmpname, '../../img/siswaimg/' . $newfilename);

    return $newfilename;

}


// 
// END-SISWA
// 

?>