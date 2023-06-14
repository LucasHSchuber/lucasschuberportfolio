<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart lock</title>
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


      <div class="title-minkonst ">

        <?php
    require_once 'assets/includes/backbtn.php';
   ?>
          <h1>
            DIGITAL SMART LOCK
          </h1>
          <h5>
            UX/UI design
          </h5>
      </div>

      <div class="aboutgoal row">
        <div class="col-md-6">
          <h4>
            <strong>OM</strong>
          </h4>
          <P>
            Gjorde en etnografisk studie och en intervju på tre olika testpersoner som använde ett smart-lås av modellen Yale Doorman 2020. Jag fann ett par tillkortakommanden med smart-låset som jag sedan tog fram olika designförslag på.
          </P>
        </div>
        <div class="col-md-6">
          <h4>
            <strong> MÅL</strong>
          </h4>
          <P>
            Att ta fram en designlösning till ett nytt smart-lås efter att ha gjort en etnografisk studie ute i fält. Resultatet blev två olika designlösningar.
          </P>
        </div>
      </div>


      <!--- process --->

      <div class="mt-5 process">
        <h1>
          Designprocess
        </h1>
      </div>



      <div class="row py-5 container-fluid content">
        <div class="mt-5">
          <h3>
            Etnografisk studie
          </h3>
        </div>
        <div class="">
          <p>
            Efter en etnografisk studie som skedde <i> quick and dirty </i> på en YaleDoorman årsmodell 2020 och individuella intervjuer ledde undersökningen till en rad designlösningar på de problem som uppstod. Till exempel visade det sig att längden
            på personen verkade ha en korrelation med användbarheten med knappsatsen. De relativt små och utstickande runda knapparna på knappsatsen visade sig inte vara optimalt designade vid varken användning med eller utan fingervantar. Det visade
            sig också att knappsatsen saknade en lutning vilket försvårade interaktionen med smart-låset. YaleDoorman visade sig ha en del tillkortakommande där en designförbättring vore optimalt för att öka användbarheten. Efter att ha kartlagt problemen
            och kommit fram till designlösningar skulle det behövts utföras en användarundersökning för att ta reda på om de nya designförslagen är en förbättring eller inte, men tyvärr fanns inte tiden till.
          </p>
        </div>
      </div>



      <div class="order row py-5 container-fluid projekt"style="margin-bottom:3em;">
        <div class="order-item2 card container col-md-5 portfolio-card" style="width: 20rem;">
          <img src="assets/images/skiss1.JPG" class="card-img-top" alt="...">
           <img src="assets/images/skiss2.JPG" class="card-img-top py-3" alt="...">
           <img src="assets/images/skiss3.JPG" class="card-img-top" alt="...">
        </div>
        <div class="order-item1 container col-md-6 content align-self-center">
          <h3>
            Skisser
          </h3>
          <p>
            Några skisser på en design som gjordes i tidigt skede.
          </p>
        </div>
      </div>

      <div class="row py-5 container-fluid projekt" style="margin-bottom: 1em;">
        <div class="container col-md-6 content">
          <h3>
            Symboler och funktioner
          </h3>
          <p>
            Digitala skisser på symboler och funktioner - olika gränsnitt som ska synas på displayen. <br> <i>knappsats, upplåst, låst/fel kod, finger-scan, ringer</i>
          </p>
        </div>
        <div class="card py-5 container col-md-6 portfolio-card" style="width:20rem;margin-top:-1.2em;">
          <img src="assets/images/smart-lock.png" class="card-img-top" alt="...">
        </div>
      </div>

      <div class="order row py-5 container-fluid projekt">
        <div class="order-item2 card container col-md-4 portfolio-card" style="width: 20rem;">
          <img src="assets/images/losning1.png" class="card-img-top" alt="...">
        </div>
        <div class="order-item1 container col-md-7 content">
          <h3>
            Designlösning 1
          </h3>
          <p>
            Processen utmynnade i bland annat denna lösning - ett modernare utseende med lutning på displayen vilket gör knappsatsen enklare att använda. Nya touchknappar som ska vara klickbara trors väta (regn). Ett renare och mer estetiskt tilltalande utseende.
          </p>
        </div>
      </div>

      <div class="row py-5 container-fluid projekt" style="margin-top: 8em;">
        <div class="container col-md-6 content">
          <h3>
            Designlösning 2
          </h3>
          <p>
            En annan lösning - Lite mer minimalistisk med displayen på handtaget vilket gör artefakten mindre otymplig.
          </p>
        </div>
        <div class="card container col-md-6 portfolio-card" style="width: 20rem;">
          <img src="assets/images/losning2.png" class="card-img-top" alt="...">
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