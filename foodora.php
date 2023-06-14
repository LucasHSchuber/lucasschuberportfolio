<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Foodora</title>
  <!-- faveicon -->
  <?php
  require_once 'assets/includes/faveicon.php';
  ?>
  <!--Bootstrap Core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!--Font-Awesome Core CSS -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!--General styles -->
  <link rel="stylesheet" href="assets/css/nycss.css">
  <!--Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Playfair+Display&family=Arimo:wght@400;500&family=Raleway:wght@300&family=Montserrat&display=swap" rel="stylesheet">
  <!-- Favicon
  <link rel="shortcut icon" href="assets/images/favicobanan.ico" type="image/x-icon">
 -->
</head>

<body>
  <!--jQuery first, then Popper.js, then Bootstrap JS -->
  <!--jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>





  <!--=================================== Main ========================================-->

  <header class="header-diff">

    <?php
    require_once 'assets/includes/fixednav.php';
    ?>


  </header>
  <main>

    <div class="wrapper">


      <?php
      require_once 'assets/includes/foodoraprojekt.php';
      ?>


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