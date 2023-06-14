<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vegilante</title>
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


      <!--- title --->

      <div class="title-minkonst">

        <?php
        require_once 'assets/includes/backbtn.php';
        ?>
        <h1>
          VEGILANTE
        </h1>
        <h5>
          UX/UI design / Webbdesign
        </h5>
      </div>

      <!--- om och mål --->

      <div class="row aboutgoal">
        <div class="col-md-6">
          <h4>
            <strong>OM</strong>
          </h4>
          <P>
            Uppgiften gick ut på att skapa en demo-hemsida av en webbbutik som sålde några utvalda veganska produkter. Den ska ha en shop och användaren ska kunna logga in med e-post och lösenord för att ändra sina uppgifter.
          </P>
        </div>
        <div class="col-md-6">
          <h4>
            <strong>MÅL</strong>
          </h4>
          <P>
            Att lära sig koda en webbbutik med en databas med språken PHP och MYSQL. Hemsidan ska dessutom vara responsiv och vara användbar i minst en mindre enhet som mobiltelefon eller läsplatta.
          </P>
        </div>
      </div>

      <!--- process --->

      <div class="mt-5 process">
        <h1>
          Designprocess
        </h1>
      </div>

      <!--- innehåll --->

      <div class="order row py-5 container-fluid">
        <div class="order-item2 card container col-md-6 portfolio-card" style="width: 20rem;">
          <img src="assets/images/wire.png" class="card-img-top" alt="...">
          <img src="assets/images/wireall.JPG" class="card-img-top py-3" alt="...">
          <img src="assets/images/wirestart.JPG" class="card-img-top pb-3" alt="...">
          <img src="assets/images/wirein.JPG" class="card-img-top" alt="...">
        </div>
        <div class="order-item1 container col-md-5 content align-self-center">
          <h3>
            Skisser och wireframes
          </h3>
          <p>
            Efter att ha skissat en layout gjorde jag wireframes av hemsidan för webben i dator.
          </p>
        </div>
      </div>

      <div class="row py-5 container-fluid">
        <div class="container col-md-5 content">
          <h3>
            Grafisk profil
          </h3>
          <p>
            logotyp, symboler, typsnitt, färger.
          </p>
        </div>
        <div class="card container col-md-6 portfolio-card" style="width: 20rem;">
          <img src="assets/images/vagilantedesign.png" class="card-img-top" alt="...">
        </div>
      </div>


      <div class="order row py-5 container-fluid">
        <div class="order-item2 card container col-md-6 portfolio-card" style="width: 20rem;">
          <img src="assets/images/kod.png" class="card-img-top" alt="...">
        </div>
        <div class="order-item1 container col-md-5 content">
          <h3>
            Kod
          </h3>
          <p>
            Frontend - HTML, CSS, Bootstrap, Javascript. <br> Backend - PHP och MySql.
          </p>
          <P>
          </P>
        </div>
      </div>

      <div class="row py-5 container-fluid">
        <div class="container col-md-5 content">
          <h3>
            Webbsidan
          </h3>
          <p>
            Tre bilder på hur webbsidan i datorn slutade.
            <br><br>
          </p>
          <div class="videolink">
            <p>
              Se en video på webbutikens utseende när användaren <i>inte</i> är inloggad här:
            </p>
            <a class="btn btn-lg" href="https://youtu.be/oG7wJHEINRc" role="button" rel="noreferrer noopener" target="_blank">Youtube</a>
          </div>
        </div>

        <div class="card container col-md-6 portfolio-card" style="width: 20rem;">
          <img src="assets/images/site1.png" class="card-img-top" alt="...">
          <img src="assets/images/site2.png" class="card-img-top py-3" alt="...">
          <img src="assets/images/site3.png" class="card-img-top" alt="...">
        </div>
      </div>



    </div>




    <?php
    require_once 'assets/includes/fixedbtn.php';
    ?>


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