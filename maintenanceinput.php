<!doctype html>
<html lang="en">
  <head>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>





    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="sources/style.css">

    <title>Maintenance</title>
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
          <img  alt="" width="80">
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
                        <h5 class="card-title align">Maintenance</h5>
                    </a>
                  </div>
            </div>
          </div>
          </div>

        <div class="container-fluid ">
          <div class="container">
            <br>
              <div class="row row-cols-1 row-cols-md-2 g-4  ">

                <div class="col margin animationLeft">
                  <a class="card border opacity-85" href="maintenance.php">
                    <div class="card-body pp">
                      <video id="webcamVideo"
                              width="600" 
                              height="450"  
                              style="border: 5px black solid" 
                              autoplay>
                        </video>
                    </div>
                  </a>
                </div>

                <div class="col margin animationRight">
                  <a class="card border opacity-85" href="maintenance.php">
                    <div class="card-body ppq">
                      <canvas id="webcamCanvas" 
                              width="590" 
                              height="440"
                              style="border: 5px black solid"></canvas>
                    </div>
                  </a> 
                </div>
              </div>

              <div class="row g-4 container pt-4 btn-animated ">
                <button class="btn btn-primary " onclick="startCamera();" type="button">Mulai Kamera</button>
              </div>

              <div class="row g-4 container pt-2 btn-animated ">
                <button class="btn btn-primary" onclick="ambilGambar();" type="button">Ambil Gambar</button>
              </div>

              <div class="row g-4 container pt-2 btn-animated ">
                <button class="btn btn-primary" type="button"><a class="btno" href="maintenanceshow.php">Kirim Gambar</a></button>
              </div>
                      
          </div>
        </div>



    <?php
        //Include file koneksi ke database
        include "koneksi.php";

        date_default_timezone_set('Asia/Ujung_Pandang');

        $jmlh=mysqli_query($conn, "SELECT * FROM maintenance WHERE 1");
        $num=mysqli_num_rows($jmlh);
        $id=$num+1;


        //menerima nilai dari kiriman form input-barang 
        $nama_lengkap=$_GET["nama"];
        $instansi=$_GET["instansi"];
        $notelp=$_GET["notelp"];
        $kepentingan=$_GET["kepentingan"];
        $waktu = date("Y-m-d H:i:s");
        $status = 1;

        //Query input menginput data kedalam tabel barang
          $sql="insert into maintenance (id, nama,instansi,notelp,kepentingan,waktu_masuk,status) values
            ('$id','$nama_lengkap','$instansi','$notelp','$kepentingan','$waktu','$status')";

        //Mengeksekusi/menjalankan query diatas	
          $hasil=mysqli_query($conn,$sql);
          
        ?>

    
    
    








    <script>
        var wVideo = document.querySelector("#webcamVideo");
        var wCanvas = document.querySelector("#webcamCanvas");

        async function startCamera() {
            var stream;
            try{
                stream =await navigator.mediaDevices.getUserMedia({video :true, audio:false});
            }catch(error){
                alert(error);
                return;
            }
            wVideo.srcObject = stream; 
        }

        function ambilGambar(){
            wCanvas.getContext("2d"). drawImage(wVideo, 0, 0, 590, 440);
            var imageData = wCanvas.toDataURL("image/jpeg");

            // console.log(imageData);

            $.post("maintenancefoto.php", {
                "imagedata" : imageData
            }, function(data){
                console.log(data);
            })
        }

    </script>




    



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