<?php
include 'head.php';


?>

<main>
        
<main>
        
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" id="Contact">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item">
              
              
              <img  width="100%" height="20%" src="web/images/1620223259-business-plan.jpg" alt="" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect>
      
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Suivez-nous</h1>
                  <p>Vous satisfaire est notre priorité!!!</p>
                  <p><a class="btn btn-lg btn-success" href="devis.php">Dévis</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img  width="100%" height="20%" src="web/images/1620223259-business-plan.jpg" alt="" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect>
      
              <div class="container">
                <div class="carousel-caption">
                  <h1>Contactez-nous</h1>
                  <p>Vous satisfaire est notre priorité!!!</p>
                  <p><a class="btn btn-lg btn-success" href="devis.php">Dévis</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item active">
              <img  width="100%" height="20%" src="web/images/1620223259-business-plan.jpg" alt="" class="bd-placeholder-img" width="80%" height="80%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"></rect>
      
              <div class="container">
                <div class="carousel-caption text-end">
                  <h1>Nous avons la solution</h1>
                  <p>Vous satisfaire est notre priorité!!!</p>
                  <p><a class="btn btn-lg btn-success" href="devis.php">Dévis</a></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
          <h1>Abonnez-vous à notre site.</h1>

          <form class="row g-3" action="mail.php" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nom</label>
    <input type="text" class="form-control" placeholder="Entrez votre nom" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Prénom</label>
    <input type="text" class="form-control" placeholder="Entrez votre prénom" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Téléphone</label>
    <input type="number" class="form-control" placeholder="Entrez votre numéro" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Entrez votre mail" id="inputEmail4">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-success">Abonnez-vous</button>
  </div>
</form>

          <?php
          include 'footer.php';
          ?>

</body>
</html>
