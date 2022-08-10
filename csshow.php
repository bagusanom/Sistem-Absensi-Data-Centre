<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="sources/style.css">

    <title>Cleaning Service</title>
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

<div class="container-fluid">
    
    <br>
        <div class="container-fluid  ">
          <div class="container ">
            <div class="rowo pt-2 row-cols-1 row-cols-md-2 g-4 justify-content-center  ">

                  <div class="col margin">
                    <a class="card border opacity-85 btn-animated">
                        <h5 class="card-title align">Login</h5>
                    </a>
                  </div>
            </div>
          </div>
          </div>


          
          
           
            <div class="rowo justify-content-center ">
              <table width="100%" class="table card border opacity-85  margin btn-animated" >
              <div class="">
                <tr class="judul-all">
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>INSTANSI</th>
                  <th>NOMER TELEPON</th>
                  <th>KEPENTINGAN</th>
                  <th>FOTO</th>
                </div>
                <?php
                  include 'koneksi.php';
                  $pengguna = mysqli_query($conn, "SELECT * from cleaning_service WHERE id IN (SELECT MAX(id) FROM cleaning_service)");
                  $no=1;
                  foreach ($pengguna as $row){
                      echo "<tr>
                          <td>$no</td>
                          <td>".$row['nama']."</td>
                          <td>".$row['instansi']."</td>
                          <td>".$row['notelp']."</td>
                          <td>".$row['kepentingan']."</td>
                          <td><img src='".$row['foto']."' width='300px' '/></td>
                          </tr>";
                      $no++;
                  }
                ?>
            </table>
            </div>
          </div>
        </div>
       </div>
    
    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    

  </body>
</html>

