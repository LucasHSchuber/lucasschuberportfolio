<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fotografi</title>
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
            NORDIC CNUS COMPANY
          </h1>
          <h5>
            UX/UI design / grafisk design / produkt design
          </h5>
      </div>



      <!--- om och mål --->

      <div class="row aboutgoal">
        <div class="col-md-6">
          <h4>
            <strong>OM</strong>
          </h4>
          <P>
            <strong>Nordic cnus company </strong> bildades våren 2020 och är ett företag i uppstartningsprocessen som i framtiden ska sälja blantbaserat snus. De frågade mig om jag ville skapa deras <strong> produktdesign och grafiska profil. </strong>            Deras målgrupp är främst subkulturer och de önskade dosor i en retro stil och ett tema med illustrationer i "ritad stil", utöver de gav de mig fria tyglar i det kreativa skapandet. Till sommaren 2021 planerar de att skapa en webbsida. Det
            grafiska är fortfarande i utvecklingsfasen.
          </P>
        </div>
        <div class="col-md-6">
          <h4>
            <strong>MÅL</strong>
          </h4>
          <P>
            Att skapa den grafiska delen åt företaget - grafisk profil, illustrationer, logotyp, dosor, hemsida.
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
          <img src="assets/images/illucnushand.png" class="card-img-top" alt="...">
        </div>
        <div class="order-item1 container col-md-5 content">
          <h3>
            Digitala illustrationer
          </h3>
          <p>
            Digital illustration skapad i Adobe illustrator. Den översta ska föreställa Adams skapelse och tanken är att den ska finnas på hemsidan under rubriken "Nordics cnus skapelse". De övriga två ska också gå att hitta på hemsidan.
          </p>
        </div>
      </div>

      <div class="row py-5 container-fluid" style="margin-bottom:3em;">
        <div class="container col-md-5 content">
          <h3>
            Grafisk profil
          </h3>
          <p>
            Den nuvarandre grafiska profilen som är under arbete.
          </p>
        </div>
        <div class="card container col-md-6 portfolio-card" style="width: 20rem;">
          <img src="assets/images/process.png" class="card-img-top" alt="...">
        </div>
      </div>


      <div class="order row py-5 container-fluid">
        <div class="order-item2 card container col-md-6 portfolio-card" style="width: 20rem;">
          <img src="assets/images/twocol.png" class="card-img-top" alt="...">
        </div>
        <div class="order-item1 container col-md-5 content">
          <h3>
            Produktdesign
          </h3>
          <p>
            Senaste produktdesignen i två olika färger. Tanken är att den ska skickas till fabrik tillsammans med det första framtagna cnus-receptet.
          </p>
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