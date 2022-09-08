<?php
  $hasil = intval($_GET['cek']);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>sertifikat | Aset Academy</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
      * {
        font-family: 'Poppins', sans-serif;
      }
      body{
        background-color: #f6f8fd;
      }
      .form{
        margin: 40px 0;
      }
      .card{
        padding: 50px 20px;
        border: none;
        border-radius: 20px;
      }
      .btn{
        padding: 8px 40px 8px 40px;
        border-radius: 50px;
      }
      @media (min-width: 992px) { 
        .form .card{
          padding: 100px;
          border: none;
          border-radius: 10px;
        }
      } 
    </style>
  </head>
  <body>
      
      <section class="kontak">
        <div class="container">
          <div class="row justify-content-center mt-5 align-items-center">
            <div class="col-xl-6 col-lg-8">
              <div class="card">
                <div class="card-body">
                  <form role="form" method="GET" action="<?php echo base_url()?>home/hasil">
                    <h3>Sertifikat</h3>
                    <p>Cetak Sertifikat workshop kamu disini</p>
                    <div class="form-floating mb-3 mt-4">
                      <input type="number" class="form-control" name="cek"  value="<?php if($hasil==0){echo'';}else{echo $hasil;}?>" id="floatingInput" placeholder="NIM" required>
                      <label for="floatingInput">NIM</label>
                    </div>
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary tombol" type="submit">Cek</button>
                    </div>
                  </form>
                  <?php
                    $hasil = intval($_GET['cek']);
                    if(($cek->nim == $hasil)&&($cek->nim != null)){
			                  echo '<a href="'.base_url("assets/file/").$cek->serti.'" class="btn btn-success w-100 mt-3">Cetak Sertifikat</a>';
                    }elseif($cek->nim != $hasil){
                      echo'<div class="alert alert-warning mt-4 alert-dismissible fade show" role="alert">
                      <strong>Maaf, </strong> Nama anda tidak terdaftar
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    }else{
                      echo '';
                    }
		              ?>
                                         
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
