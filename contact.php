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
    <link rel="stylesheet" href="./css/contact.css">
    <title>Contact Us | Valostats</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="rankings.php">Rankings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stats.php">Statistics</a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link active" href="contact.php">Contact Us</a>
                    </li>
                </ul>
                <a class="btn btn-outline-secondary" href="logout.php">LogOut</a>
            </div>
        </div>
    </nav>
    <div class="wrapper bg-dark">
        <div class="container-fluid">
            <ul class="d-flex flex-row flex-wrap icon-list">
                <li class="py-2 ms-3">
                    <a class="text-muted" href="https://www.instagram.com/vlr.gg/"><img src="./image/instagram.png" alt="instagram" width="50px" height="50px">&nbsp;&nbsp;Instagram</a>
                </li>
                <li class="py-2 ms-3">
                    <a class="text-muted" href="https://www.facebook.com/search/top?q=valorant"><img src="./image/facebook.png" alt="facebook" width="50px" height="50px">&nbsp;&nbsp;Facebook</a>
                </li>
                <li class="py-2 ms-3">
                    <a class="text-muted" href="https://twitter.com/vlrdotgg"><img src="./image/twitter.png" alt="twitter" width="50px" height="50px">&nbsp;&nbsp;Twitter</a>
                </li>
                <li class="py-2 ms-3">
                    <a class="text-muted" href="https://discord.com/invite/VLR"><img src="./image/discord.png" alt="discord" width="50px" height="50px">&nbsp;&nbsp;Discord</a>
                </li>
            </ul>
        </div>
    </div>
    <footer class="bg-dark d-flex flex-wrap justify-content-between align-items-center">
        <div class="col-md-4 d-flex align-items-center">
            <span class="text-muted">A website by Noobs...</span>
        </div>
    </footer>
</body>

</html>