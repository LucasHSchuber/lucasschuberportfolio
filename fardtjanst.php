<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Färdtjänst</title>
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
          BROMMA FÄRDTJÄNST
        </h1>
        <h5>
          UX/UI design / Webbdesign / Webbutveckling
        </h5>
      </div>

      <!--- om och mål --->

      <div class="row aboutgoal">
        <div class="col-md-6">
          <h4>
            <strong>OM</strong>
          </h4>
          <P>
            Uppgiften gick ut på att skapa en demo-hemsida där användaren kunde boka, ändra och radera en färdtjänst.
          </P>
        </div>
        <div class="col-md-6">
          <h4>
            <strong>MÅL</strong>
          </h4>
          <P>
            Uppgiften hade fokus på webbanvändbarhet där webbriktlinjer togs i beaktning. Hemsidan kodas i HTML/CSS/JAVASCRIPT och är responsiv.
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
          <img src="assets/images/fardtjanstwebb.jpg" class="card-img-top" alt="...">
          <img src="assets/images/fardtjanstmobil.jpg" class="card-img-top py-3" alt="...">
        </div>
        <div class="order-item1 container col-md-5 content align-self-center">
          <h3>
            Prototyp i Figma
          </h3>
          <p>
            Prototyp för mobil och dator
          </p>
          <div class="videolink">
            <p>
              Klicka på knapparna för att se prototypen:
            </p>
            <a class="btn btn-lg" href="https://www.figma.com/file/iY1RSRX9bB1Px3UZ1WKJgW/F%C3%A4rdtj%C3%A4nst-webb?type=design&node-id=0%3A1&t=BqzmOCT9tJIbDHxA-1" role="button" rel="noreferrer noopener" target="_blank">Dator</a>
            <a class="btn btn-lg" href="https://www.figma.com/file/tUBaIfR63xtAhIRKAYfsCe/F%C3%A4rdtj%C3%A4nst-iphone?type=design&node-id=0%3A1&t=SpKjoNxWc0uSfYTy-1" role="button" rel="noreferrer noopener" target="_blank">Mobil</a>

          </div>
        </div>
      </div>

      <div class="row py-5 container-fluid">
        <div class="container col-md-5 content">
          <h3>
            Webbsidan
          </h3>
          <div class="videolink">
            <p>
              Klicka på knappen för att komma till hemsidan:
            </p>
            <a class="btn btn-lg" href="http://studenter.miun.se/~luha2200/WEBBANV%c3%84NDBARHET/fardtjanst_projekt_kod/index.html" role="button" rel="noreferrer noopener" target="_blank">Hemsidan</a>
          </div>
        </div>
        <div class="card container col-md-6 portfolio-card" style="width: 20rem;">
          <img src="assets/images/fardtjanst.jpg" class="card-img-top" alt="...">
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