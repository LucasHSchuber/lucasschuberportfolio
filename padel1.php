<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            PADEL STHLM
          </h1>
          <h5>
            UX/UI design / grafisk design
          </h5>
      </div>



      <!--- om och mål --->

      <div class="row aboutgoal">
        <div class="col-md-6">
          <h4>
            <strong>OM</strong>
          </h4>
          <P>
            Padel har gjort kometkarriär i Sverige och i takt med att intresset ökar blir padelbanorna allt fler och fler. Stockholms stad stöttar trenden med att resa flera utomhuspadelbanor för gratisspel. Det finns dock en del tillkortakommanden med det befintliga
            bokningssystemet och jag valde att designa en applikation som bland annat förenklar bokningen av banor.
          </P>
        </div>
        <div class="col-md-6">
          <h4>
            <strong>MÅL</strong>
          </h4>
          <P>
            Att designa en applikation för banbokning och ett enkelt sätt att söka padelspelare på som förhåller sig till de vetenskapliga begreppen ubiquitous computing och social computing.
          </P>
        </div>
      </div>

      <!--- process --->

      <div class="mt-5 process">
        <h1>
          Designprocess
        </h1>
      </div>

      <div class="row py-5 container-fluid projekt content">
        <div class="mt-5 ">
          <h3>
            Etnografisk studie
          </h3>
        </div>
        <div class="">
          <p>
            Under den etnografiska studien observerade jag att man måste gå ner och köa fysiskt för att boka en speltid på dessa banor. Man meddelar alltså spelande lag att man ställer sig på kö och är därefter kvar i anslutning till banan för att inte gå miste om
            sin bokning. Dessutom var det flera lag som inte som inte var fullt lag (4 personer) och sökte därför gärna efter en spelare bland banorna som håller samma nivå på spelet. Det var ibland svårt att hitta vilka spelare som stod på kö och ibland
            fick man fråga runt och leta efter de som köade. Ett problem som uppstod var att det lätt blev missförstånd om vilka som köade och inte när det var högt tryck och många på kö. Spelare kan också försvinna från banområdet och fortfarande tro
            att de har en bokad tid (på ett A4-ark vid banorna över regler står det att "man måste hålla sig inom området för att behålla sin tid, annars förlorar man den"). När de återkommer tror de att de kan behålla köplatsen trots att reglerna säger
            att detta inte är ok. Det kan då uppstå diskussioner och tjaffs.   De som spelade på banan blev ofta störda av frågan "är det någon på kö efter er - isf vilka är på kö och vet ni hur de ser ut och var de sitter". Det gör att spelarna tappar
            fokus och vissa kan bli lite smått irriterade att de blir störda eftersom att spelet pausas och deras tid tickar på.
          </p>
        </div>
      </div>

      <!--- innehåll --->

      <div class="order row py-5 container-fluid">
        <div class="order-item2 card container col-md-5 portfolio-card" style="width: 20rem;">
          <img src="assets/images/designbrief.png" class="card-img-top" alt="...">
        </div>
        <div class="order-item1 container col-md-5 content">
          <h3>
            Designbrief
          </h3>
          <p>
            Tog fram en designbrief som en ram för designprojektet.
          </p>
        </div>
      </div>

      <div class="row py-5 container-fluid" style="margin-bottom:3em;">
        <div class="container col-md-5 content">
          <h3>
            PACT-analys
          </h3>
          <p>
            Gjorde en PACT-analys för att analysera med vem, med vad, var och hur användaren interagerar med gränssnittet.
          </p>
        </div>
        <div class="card container col-md-6 portfolio-card" style="width: 20rem;">
          <img src="assets/images/pact.png" class="card-img-top" alt="...">
        </div>
      </div>


      <div class="order row py-5 container-fluid">
        <div class="order-item2 card container col-md-5 portfolio-card" style="width: 20rem;">
          <img src="assets/images/wireframes.JPG" class="card-img-top" alt="...">
        </div>
        <div class="order-item1 container col-md-5 content">
          <h3>
            Wireframes och prototyp
          </h3>
          <p>
            Skapade wireframes för att konkretisera sidans tänkta struktur, navigation och funktionalitet. Använde dem som en low-fidelity prototyp för att testa användarinteraktionen när man scannar in på en bana, bokar en tid och söker spelare/motstånd.
          </p>
        </div>
      </div>

      <div class="row py-5 container-fluid" style="margin-bottom:3em;">
        <div class="container col-md-5 content">
          <h3>
            Grafisk profil
          </h3>
          <p>
            Tog fram en grafisk profil.
          </p>
        </div>
        <div class="card container col-md-7 portfolio-card" style="width: 20rem;">
          <img src="assets/images/padelgrafiskprofil1.png" class="card-img-top" alt="..." style="border:1px solid black;">
        </div>
      </div>


      <div class="order row py-5 container-fluid">
        <div class="order-item2 card container col-md-6 portfolio-card" style="width: 20rem;">
          <img src="assets/images/prototypxd.png" class="card-img-top" alt="..." style="border:1px solid black;margin-top:-3em;">
        </div>
        <div class="order-item1 container col-md-5 content">
          <h3>
            Prototyp
          </h3>
          <p>
            En interaktiv prototyp skapad i ADOBE XD.
            <br><br>
          </p>
          <div class="videolink">
            <p>
              Se en video på interaktionen med mobilapplikationen här:
              <a class="btn btn-lg mt-2" href="https://youtu.be/EsLjbg9g_L8" role="button" rel="noreferrer noopener" target="_blank">Youtube</a>
            </p>
            <br>
          </div>

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