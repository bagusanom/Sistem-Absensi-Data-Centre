

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="sources/styles.css">

    <title>Penitipan</title>
  </head>
  <body class=" bg">

    <nav class="navbar bgnav">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="./sources/badung.png" alt="" width="100">
        </a>
        <div class="navbar-brand justify-content-center font">
          DISKOMINFO BADUNG
        </div>
        <a class="navbar-brand d-flex" href="index.php">
          <img src="./sources/kominfo.png" alt="" width="100">
        </a>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="container pt-5">
        <form>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nama" placeholder="...">
            <label for="nama">Nama Lengkap</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="instansi" placeholder="...">
            <label for="instansi">Instansi</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="..." id="kepentingan"></textarea>
            <label for="kepentingan">Kepentingan</label>
          </div>

           <div class="d-grid gap-2 col-6 pb-5" >
            <a href="cam.php">
              <button class="btn btn-secondary"  type="button" href="cam.php">Check In</button>
            </a>
          </div>
        </form>
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