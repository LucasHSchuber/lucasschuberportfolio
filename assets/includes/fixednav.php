<nav class="navbar navbar-expand-lg fixed-top" id="navbarNavAltMarkup">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="assets/images/hem.png" class="card-img-top househome" alt="..."></a>
    <button class="navbar-toggler" id="sticky-collapse" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><img src="assets/images/toggle2.png" class="card-img-top toggle" alt="..."></span>
    </button>
    <div class="collapse navbar-collapse col-lg-4" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Hem</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#566B60" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Portfolio
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdown-menu">
            <li id="dropdown-link"><a class="dropdown-item " href="portfolio.php">Alla projekt</a></li>
            <li id="dropdown-link">
              <hr class="dropdown-divider" style="width: 13em; margin:auto; opacity: 0.4;">
            </li>
            <li id="dropdown-link"><a class="dropdown-item " href="yrke.php">Yrkesprojekt</a></li>
            <li id="dropdown-link"><a class="dropdown-item " href="skol.php">Skolprojekt</a></li>
            <li id="dropdown-link"><a class="dropdown-item " href="privat.php">Privata projekt</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="ommig.php">Om mig</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" data-toggle="modal" data-target=".bd-example-modal-lg">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<?php
require_once 'assets/includes/modal.php';
?>



<script>
  // When the user scrolls down 80px from the top of the document.

  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 75 || document.documentElement.scrollTop > 75) {
      document.getElementById("navbarNavAltMarkup").style.backgroundColor = "rgba(187, 202, 195, 1)";
      document.getElementById("dropdown-menu").style.backgroundColor = "rgba(187, 202, 195, 1)";


    } else {
      document.getElementById("navbarNavAltMarkup").style.backgroundColor = "";
      document.getElementById("dropdown-menu").style.backgroundColor = "";

    }
  }
</script>