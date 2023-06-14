<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portfolio</title>
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

    <!-- <div class="alert fixed-top alert-dismissible fade show" role="alert">
      <strong>Webbplatsen är under arbete</strong> - från den 13/6 reviderar jag portfolio-sidorna vilket innebär att responsiviten på dessa sidor kommer att påverkas.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> -->

    <div class="wrapper">


      <div class="title">

        <h1>
          PORTFOLIO
        </h1>
        <h5>
          <i>Alla projekt</i>
        </h5>
      </div>


      <div class="row py-5 container-fluid projekt order">
        <div class="order-item2 container col-lg-7 text1">
          <h1>
            FOODORA
          </h1>
          <h5>
            Content creator
          </h5>
          <P>
            Arbetade som content creator på Foodora market där jag skapade rörligt och stilla material både internt och extern.
          </P>
          <a class="btn btn-lg mt-2" href="foodora.php" role="button">Se projekt</a>
        </div>
        <div class="order-item1 card container col-lg-4 portfolio-card" style="width: 20rem;">
          <img src="assets/images/foodoralogo1.png" class="card-img-top" alt="...">
        </div>
      </div>

      <div class="row py-5 container-fluid projekt">
        <div class="card container col-lg-4 portfolio-card" style="width: 20rem;">
          <img src="assets/images/face.png" class="card-img-top" alt="...">
        </div>
        <div class="container col-lg-7 text1">
          <h1>
            MIN KONST
          </h1>
          <h5>
            Grafisk design
          </h5>
          <P>
            Linjekonst, målningar och illustrationer som jag har skapat på min fritid.
          </P>
          <a class="btn btn-lg mt-2" href="minkonst.php" role="button">Se arbetet</a>
        </div>
      </div>

      <div class="row py-5 container-fluid projekt order">
        <div class="order-item2 container col-lg-7 text1">
          <h1>
            FOTOGRAFI
          </h1>
          <h5>
            Fotografi
          </h5>
          <P>
            Några fotografier som jag har tagit med min trogna CANON 600D under åren. Redigerade i Adobe photoshop.
          </P>
          <a class="btn btn-lg mt-2" href="foto.php" role="button">Se arbetet</a>
        </div>
        <div class="order-item1 card container col-lg-5 portfolio-card" style="width: 20rem;">
          <img src="assets/images/pola2.png" class="card-img-top" alt="...">
        </div>
      </div>

      <div class="row py-5 container-fluid projekt">
        <div class="card container col-lg-4 portfolio-card" style="width: 20rem;">
          <img src="assets/images/cnussvart.png" class="card-img-top" alt="...">
        </div>
        <div class="container col-lg-7 text1">
          <h1>
            NORDIC CNUS COMPANY
          </h1>
          <h5>
            UX/UI design / grafisk design / produkt design
          </h5>
          <P>
            Ett nyuppstartat företag som i framtiden ska producera THC-fritt CBD-snus. <br> Pågående projekt.
          </P>
          <a class="btn btn-lg mt-2" href="cnus.php" role="button">Se arbetet</a>
        </div>
      </div>

      <div class="row py-5 container-fluid projekt order">

        <div class="order-item2 container col-lg-7 text1">
          <h1>
            DIGITAL SMART LOCK
          </h1>
          <h5>
            UX/UI design
          </h5>
          <P>
            Gjorde en etnografisk studie på ett smart-lås som jag sedan tog fram olika designförslag på.
          </P>
          <a class="btn btn-lg mt-2" href="smartlock.php" role="button">Se arbetet</a>
        </div>
        <div class="order-item1 card container col-lg-4 portfolio-card" style="width: 20rem;">
          <img src="assets/images/lock.png" class="card-img-top" alt="...">
        </div>
      </div>

      <div class="row py-5 container-fluid projekt">

        <div class="card container col-lg-4 portfolio-card" style="width: 20rem;">
          <img src="assets/images/kod2.png" class="card-img-top" alt="...">
        </div>
        <div class="container col-lg-7 text1">
          <h1>
            VEGILANTE
          </h1>
          <h5>
            UX/UI design / Webbdesign
          </h5>
          <P>
            Skapade en demo-webbsida till en fiktiv webbshop som säljer några utvalda veganska produkter.
          </P>
          <a class="btn btn-lg mt-2" href="vegilante.php" role="button">Se arbetet</a>
        </div>

      </div>



      <div class="row py-5 container-fluid projekt order">

        <div class="container col-lg-7 text1 order-item2">
          <h1>
            PADEL STHLM
          </h1>
          <h5>
            UX/UI design / Grafisk design
          </h5>
          <P>
            Gjorde en etnografisk studie på hur bokningen vid Stockholms utomhuspadelbanor går till och designade därefeter en applikation för bokning och sökning efter andra spelare.
          </P>
          <a class="btn btn-lg mt-2" href="padel1.php" role="button">Se arbetet</a>
        </div>
        <div class="order-item1 card container col-lg-4 portfolio-card" style="width: 20rem;">
          <img src="assets/images/start.png" class="card-img-top" alt="...">
        </div>
      </div>

      <!--

      <div class="row py-5 container-fluid projekt">

        <div class="card container col-lg-4 portfolio-card" style="width: 20rem;">
          <img src="assets/images/ocean.png" class="card-img-top" alt="...">
        </div>
        <div class="container col-lg-7 text1">
          <h1>
            OCEAN
          </h1>
          <h5>
            Grafisk design
          </h5>
          <P>
            Jag gjorde en grafisk profil, visitkort, livsmedelsförpackningar och shoppingbag till ett fiktivt företag som tillverkar vattenflaskor av återvunnen plast.
          </P>
          <a class="btn btn-lg mt-2" href="ocean.php" role="button">Se arbetet</a>
        </div>

      </div>
    
    --->

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