// ambil elemen
var  keyword = document.getElementById('keyword');
var searchb = document.getElementById('searchb');
var container = document.getElementById('container');

// event pada keyword

keyword.addEventListener('keyup', function() {
    // buat oblek
    var ajax = new XMLHttpRequest();

    // cek ajax
    ajax.onreadystatechange = function() {
        if ( ajax.readyState == 4 && ajax.status == 200) {
             container.innerHTML = ajax.responseText;
        }
    }

    // eksekusi ajax
    // parameter ajax.open('metode get/post', 'Lokasi ambil data', 'false(sinkronus) atau true');

    ajax.open('GET', '../../assets/ajax/pengajar.php?keyword=' + keyword.value, true);
    ajax.send();
});