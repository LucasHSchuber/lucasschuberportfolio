<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hem</title>
  <!-- faveicon -->
  <?php
    require_once 'assets/includes/faveicon.php';
   ?>
    <!--Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Font-Awesome Core CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--General styles -->
    <link rel="stylesheet" href="assets/css/test.css">
    <!--Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display&family=Darker+Grotesque:wght@300&family=Playfair+Display&family=family=Frank+Ruhl+Libre:wght@300&Rajdhani:wght@300&family=Lexend+Mega&display=swap" rel="stylesheet">

    <!-- Favicon
  <link rel="shortcut icon" href="assets/images/favicobanan.ico" type="image/x-icon">
 -->
</head>

<body>
  <!--jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>




  <!--=================================== Main ========================================-->

  <header>

    <?php
    require_once 'assets/includes/fixednav-test.php';
   ?>

  </header>
  <main>

   <div class="hero-image" style="background-image: url('assets/images/ux2.png">
    <div class="hero-text">
      <h1 class="mb-5">Hej! Jag heter Lucas Schuber</h1>
      <h3>och är digital designer</h3>
    </div>
  </div>
    
    
    <div class="divider">

      <div class="row container-fluid" style="margin:auto;padding:5em 6em 5em 6em;">
        <div class="container-fluid col-lg-6 col-sm-6  " style="text-align:center;">
          <h1>
            Letar du efter min portfolio?
          </h1>
           <p class="">
            Klicka på knappen
          </p>
        </div>
        <div class="col-lg-6 col-sm-6 " style="text-align:center;">
           <h1>
            Eller vill du veta lite mer om mig?
           </h1>
           <p class="">
            Klicka på gubben
          </p>
        </div>
      </div>

   </div>


    
  <div class="uxtest" style="background-image: url('assets/images/ux2.png">

    <div class="row uxbox container-fluid" style="margin:auto;padding:0em 6em 4em 6em;">
      <div class="container-fluid col-lg-8 col-sm-8">
        <h1 class="pb-2">
          Vill du se lite av det jag har skapat?
        </h1>
        <p class="pb-2">
          Du hittar alla mina projekt i min portfolio
        </p>
      </div>
      <div class="col-lg-3 col-sm-3 align-self-center">
        <a role="button" class="btn btn-lg mb-5" href="portfolio.php" aria-pressed="true" >Portfolio</a>
      </div>
    </div>

 </div>

    
  </main>
  <footer>

    <?php
    require_once 'assets/includes/footer.php';
   ?>

  </footer>


  <script>
  </script>

</body>

</html>