var keyword = document.getElementById('keyword');
var searchContainer = document.getElementById('search-container');

keyword.onkeyup = function () {
    fetch('ajax/mahasiswa.php?=' + keyword.value)

    .then((response) => response.text())
    .then((text) => (searchContainer.innerHTML = text));

}