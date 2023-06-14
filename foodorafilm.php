<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Foodora film</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300&family=Playfair+Display&family=family=Frank+Ruhl+Libre:wght@300&Rajdhani:wght@300&family=Lexend+Mega&display=swap" rel="stylesheet">

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
        require_once 'assets/includes/fixednav.php';
        ?>

    </header>

    <main>
        <div class="wrapper">


            <div class="title-minkonst pb-5">

                <a role="button" class="btn btn-lg backbtn mb-5" href="foodora.php" aria-pressed="true">Tillbaka</a>


                <h1>
                    FILM
                </h1>
                <h5>
                    Filmer
                </h5>
            </div>



            <div class="card-group row">
                <div class="card col-sm-6">
                    <video width="400" controls>
                        <source src="assets/images/film/film1.mp4" type="video/mp4">
                        <source src="assets/images/film/film1.mp4" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">Animerad film till sociala medier</h5>
                    </div>
                </div>
                <div class="card col-sm-6">
                    <video width="400" controls>
                        <source src="assets/images/film/film2.mp4" type="video/mp4">
                        <source src="assets/images/film/film2.mp4" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">Animerad film till sociala medier</h5>
                    </div>
                </div>
            </div>

            <div class="card-group row">
                <div class="card col-sm-6">
                    <video width="400" controls>
                        <source src="assets/images/film/film3.mp4" type="video/mp4">
                        <source src="assets/images/film/film3.mp4" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">Animerad film till sociala medier</h5>
                    </div>
                </div>
                <div class="card col-sm-6">
                    <video width="400" controls>
                        <source src="assets/images/film/film4.mp4" type="video/mp4">
                        <source src="assets/images/film/film4.mp4" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">Animerad film till sociala medier</h5>
                    </div>
                </div>
            </div>

            <div class="card-group row">
                <div class="card col-sm-6">
                    <video width="400" controls>
                        <source src="assets/images/film/film5.mp4" type="video/mp4">
                        <source src="assets/images/film/film5.mp4" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">Kortfilm till en leverantörsträff</h5>
                    </div>
                </div>
                <div class="card col-sm-6">
                    <video width="400" controls>
                        <source src="assets/images/film/film6.mp4" type="video/mp4">
                        <source src="assets/images/film/film6.mp4" type="video/ogg">
                        Your browser does not support HTML video.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">Kortfilm till en leverantörsträff</h5>
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