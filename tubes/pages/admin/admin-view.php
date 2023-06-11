<?php 
require('../../assets/sessions/session-admin.php');

require('../../assets/function/functions.php'); 
require('../../assets/parts/admin-part/header-admin.php');
require('../../assets/parts/admin-part/nav-admin.php');

$data1 = jumlah_pengajar("SELECT COUNT(*) FROM pengajar");
$data2 = jumlah_siswa("SELECT COUNT(*) FROM siswa");
?>

<style>
  .container{
  height: 100vh;
}

</style>

<div class="container">
  <div class="content">
    <!-- Konten halaman -->
    <div class="content-header">
      <h3 style="text-align: center;">DASHBOARD</h3>
      <div style="max-height: 350px;">
        <canvas id="graphic_pengajar-siswa" style="margin: 0;"></canvas>
      </div>
    </div>
  
    
    
  </div>
</div>


<script>
  const graphic = document.getElementById('graphic_pengajar-siswa');
  const pengajar = <?= $data1['COUNT(*)'] ?>;
  const siswa = <?= $data2['COUNT(*)'] ?>;

  new Chart(graphic, {
    type: 'bar',
    data: {
      labels: ['Guru', 'Siswa'],
      datasets: [{
        label: ' Guru dan Siswa',
        data: [pengajar, siswa ],
        backgroundColor: ['#E8AA42', '#79E0EE'],
        borderWidth: 1
      }]
    },
    options: {
        plugins: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Jumlah Pengajar dan Siswa'
            }
        
        }
      
    }
  });
</script>
<?php require('../../assets/parts/admin-part/footer-admin.php');?>
