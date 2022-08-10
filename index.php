<?php
  include_once "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="sources/styles.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <title>Index</title>
  </head>
  <body class="bg">


    <nav class="navbar bgnav">
      <div class="container kotak">
        <a class="navbar-brand" href="index.php">
          <img src="./sources/badung.png" alt="" width="100">
        </a>
        <div class="navbar-brand justify-content-center font">
          DISKOMINFO BADUNG</div>
        <a class="navbar-brand d-flex" href="index.php">
          <img src="./sources/kominfo.png" alt="" width="100">
        </a>
        <a class="visit" href="visitor.php">
          <img src="./sources/menubar.png" alt="" width="80">
        </a>
      </div>
      
    </nav>

    

  

    

    <div class="container-fluid ">
      <div class="container">
        <br>
          <div class="row row-cols-1 row-cols-md-2 g-4  ">

            <div class="col margin animationLeft">
              <a class="card border opacity-75" href="maintenance.php">
                <img src="./sources/maintenance.png" class="card-img-top tengah" style="max-width: 18rem;" alt="maintenance.png">
                <div class="card-body">
                  <h5 class="card-title align">Maintenance</h5>
                </div>
              </a>
            </div>

            <div class="col margin animationRight">
              <a class="card border opacity-75" href="kunjungan.php">
                <img src="./sources/kunjungan.png" class="card-img-top tengah" style="max-width: 18rem;" alt="kujungan.png">
                <div class="card-body">
                  <h5 class="card-title align">Kunjungan</h5>
                </div>
              </a> 
            </div>
            
          

            <!-- <div class="col foot animationRight">
              <a class="card border opacity-75" href="penitipan.php">
                <img src="./sources/nitip.png" class="card-img-top tengah" style="max-width: 18rem;" alt="nitip.png">
                <div class="card-body">
                  <h5 class="card-title align">Penitipan Server</h5>
                </div>
              </a>
            </div> -->
            
          </div>
                  <br>
                      <div class="    justify-content-center">
                          <div class="col foot btn-animated  ">
                            <a class="card border opacity-75  " href="cs.php">
                              <img src="./sources/cs.png" class="card-img-top tengah" style="max-width: 18rem;" alt="cs.png">
                                <div class="card-body">
                                  <h5 class="card-title align">Cleaning Service</h5>
                                </div>
                            </a>
                          </div>
                        </div>
      </div>
    </div>
    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>