<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true)
{
    header("location: login.php");
    exit(0);
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Valorant Statistics | Valostats</title>
</head>

<body>
    <nav class="navigation navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="index.php" class="d-flex align-items-center px-2 mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="./image/logo_header.png" height="40x" width="40px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="rankings.php">Rankings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stats.php">Statistics</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link " href="contact.php">Contact Us</a>
                    </li>
                </ul>
                <a class="btn btn-outline-secondary" href="logout.php">LogOut</a>

            </div>
        </div>
    </nav>
    <div class="jumbo bg-dark rounded-3">
        <div class="container-fluid py-5">
            <h1 class="col-md-8 display-5 fw-bold">Welcome to Valostats...</h1>
            <p class="col-md-8 fs-4">
                Looking for amazing Statistics of Valorant....<br> You are at the right place....<br> Happy Surfing..!
            </p>
        </div>
    </div>
    <div class="crds row row-cols-1 row-cols-md-2">
        <!-- <div class="col">
            <div class="crd card bg-dark">
                <img src="./image/1081933.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Best Jett</h5>
                    <p class="card-text">Look out who is the best Jett in the server...!</p>
                    <a href="stats.php" class="btn btn-outline-danger">See More</a>
                </div>
            </div>
        </div> -->


        <div class="col">
  <div class="crd card bg-dark">
    <img class="card-img-top card-image" src="./image/1081933.jpg" alt="..." data-original-url="./image/1081933.jpg">
    <div class="card-body">
      <h5 class="card-title">Best Jett</h5>
      <p class="card-text">Look out who is the best Jett in the server...!</p>
      <!-- <a class="btn btn-outline-danger change-photo">See More</a> -->
      <a href="stats.php" id="myBtn" class="btn btn-outline-danger change-photo" data-photo-url="./image/1086709.png" data-original-photo="./image/1081933.jpg">See More</a>

    </div>
  </div>
</div>




        <div class="col">
            <div class="crd card bg-dark">
                <img src="./image/neon.jpg" class="card-img-top card-image" alt="..." data-original-url="./image/neon.jpg">
                <div class="card-body">
                    <h5 class="card-title">Table Toppers</h5>
                    <p class="card-text">Who is leading team in the server..!</p>
                    <!-- <a href="rankings.php" class="btn btn-outline-danger">See More</a> -->
                    <a href="ranking.php" id="myBtn" class="btn btn-outline-danger change-photo" data-photo-url="./image/kj.jpg" data-original-photo="./image/neon.jpg">See More</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class=" crd card bg-dark">
                <img src="./image/1149777.jpg" class="card-img-top card-image" alt="..." data-original-url="./image/1149777.jpg">
                <div class="card-body">
                    <h5 class="card-title">Head Hunter</h5>
                    <p class="card-text">Who's hunting heads in the server with highest headshot percentage...!</p>
                    <!-- <a href="stats.php" class="btn btn-outline-danger">See More</a> -->
                    <a href="stats.php" id="myBtn" class="btn btn-outline-danger change-photo" data-photo-url="./image/phinix.jpg" data-original-photo="./image/1149777.jpg">See More</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="crd card bg-dark">
                <img src="./image/1098683.png" class="card-img-top card-image" alt="..." data-original-url="./image/1098683.jpg">
                <div class="card-body">
                    <h5 class="card-title">Consistency is the Key..!</h5>
                    <p class="card-text">Find out the most consistant player in the game...!</p>
                    <!-- <a href="stats.php" class="btn btn-outline-danger">See More</a> -->
                    <a href="stats.php" id="myBtn" class="btn btn-outline-danger change-photo" data-photo-url="./image/raze.png" data-original-photo="./image/1098683.jpg">See More</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark d-flex flex-wrap justify-content-between align-items-center">
        <div class="col-md-4 d-flex align-items-center">
            <span class="text-muted">A website by Noobs....</span>
        </div>
    </footer>


    <script>
    $(document).ready(function(){
      $("#myBtn").click(function(){
        alert("You Are Redirected Succesfully !!");
      });
    });
  </script>






</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
  // When hovering over the "See More" button
  $('.change-photo').hover(function() {
    // Get the new photo URL from the data attribute
    var newPhoto = $(this).data('photo-url');

    // Find the card's image and change its source
    var cardImage = $(this).closest('.card').find('.card-image');
    cardImage.attr('src', newPhoto);
  }, function() {
    // Revert to the original photo URL when the mouse leaves the button
    var originalPhoto = $(this).closest('.card').find('.card-image').data('original-url');
    $(this).closest('.card').find('.card-image').attr('src', originalPhoto);
  });
});

</script>

</html>