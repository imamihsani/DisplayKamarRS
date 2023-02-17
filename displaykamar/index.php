<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Display Kamar | RSU Amanah Sumpiuh</title>
</head>
<body>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap");
      body {
        font-family: "Comfortaa", cursive;
      }
    </style>

    <div class="container-fluid mt-2">
        <div class="row">
            <h5 class="text-center">INFORMASI KETERSEDIAAN KAMAR RSU AMANAH SUMPIUH</h5>
            <div class="col-8">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="aset/gambar/gedungrs11.jfif" class="d-block w-100" alt="..." style="height: 350px">
                        </div>
                        <div class="carousel-item">
                        <img src="aset/gambar/BG TV IGD1.jpg" class="d-block w-100" alt="..." style="height: 350px">
                        </div>
                        <div class="carousel-item">
                        <img src="aset/gambar/IGD22.jpg" class="d-block w-100" alt="..." style="height: 350px">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev" style="visibility:hidden">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next" style="visibility:hidden">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-4">
                <video video playsinline autoplay muted loop width="100%" height="350px" src="aset/gambar/video.mp4" controls>
                    <p>Maaf perangkat/browser anda spek kentang jadi ga bisa nampilin video, xixixi...</p>
                </video>  
            </div>
        </div>
        <div class="row">
            
                <?php 
                include "koneksi.php";
                
                $ambildatakamar = mysqli_query($koneksi, "SELECT * FROM RSUKamarTT");
                while ($tampildatakamar = mysqli_fetch_array($ambildatakamar)) { 
        
                ?>
                <div class="col-3">
                    <div class="card mb-3">
                        <div class="card-body" style="background-color:mediumslateblue;">
                            <h4 class="text-white text-center "><?php echo $tampildatakamar['KELAS']; ?></h4>
                            <div class="row mb-1">
                            <div class="col-4" style="background-color:mediumseagreen">
                                <h6 class="text-light mt-1 text-center">Kapasitas: <?php echo $tampildatakamar['KAPASITAS'];?></h6>
                            </div>
                            <div class="col-4" style="background-color:mediumseagreen">
                                <h6 class="text-light mt-1 text-center">Kosong: <?php echo $tampildatakamar['KOSONG'];?></h6>
                            </div>
                            <div class="col-4" style="background-color:red">
                                <h6 class="text-light mt-1 text-center">Terisi: <?php echo $tampildatakamar['TERISI'];?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6" style="background-color:mediumseagreen">
                                <h5 class="text-light text-center mt-1"><i class="fa fa-male" aria-hidden="true"></i> : <?php echo $tampildatakamar['KOSONG_LAKI'];?></h5>
                            </div>
                            <div class="col-6" style="background-color:mediumseagreen">
                                <h5 class="text-light text-center mt-1"><i class="fa fa-female" aria-hidden="true"></i> : <?php echo $tampildatakamar['KOSONG_PEREMPUAN'];?></h5>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            
        </div>
    </div>
</body>
<script src="aset/js/bootstrap.min.js"></script>
<?php
?>
</html>