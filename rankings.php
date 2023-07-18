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
    <link rel="stylesheet" href="./css/rankings.css">
    <title>Valorant Competitve Rankings | Valostats</title>
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="rankings.php">Rankings</a>
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
    <div class="wrapper bg-dark">
        <div class="heading bg-dark">
            <h3 class="head-txt">Valorant Team Rankings: World</h3>
        </div>
        <hr>
        <div class="container-fluid p-0 row">
            <div class="col-md-6 px-3 table-responsive">
                <h3 class="region-name fw-bolder">EUROPE</h3>
                <table class="table  table-dark table-hover table-border">
                    <tbody>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">1</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="//owcdn.net/img/5feab33100c1d.png" alt="FunPlus Phoenix" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        FunPlus Phoenix
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Europe</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2400</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/5f3cbb213e5de.png" alt="G2 Esports" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        G2 Esports
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Europe</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2152</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">3</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/611a8c6dc5dac.png" alt="Acend" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        Acend
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Europe</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2149</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">4</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/623a720ec4c65.png" alt="M3 Champions" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        M3 Champions
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Russia</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2094</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">5</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/60cedbff184c0.png" alt="Team Liquid" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        Team Liquid
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Europe</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2071</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 px-3 table-responsive">
                <h3 class="region-name fw-bolder">NORTH AMERICA</h3>
                <table class="table table-dark table-hover table-border">
                    <tbody>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">1</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/61855eeea774f.png" alt="The Gaurd" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        &nbsp;The Gaurd
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">United States</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2352</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/62058219d274f.png" alt="OpTic Gaming" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        &nbsp;OpTic Gaming
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">North America</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2276</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">3</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/60cedb25c2016.png" alt="Cloud9" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        &nbsp;Cloud9
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">United States</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2212</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">4</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/60471e6970fcf.png" alt="XSET" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        &nbsp;XSET
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">United States</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2070</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">5</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/6028427b5bbd6.png" alt="Version 1" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        &nbsp;Version 1
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Canada</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2041</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="my-4">
        <div class="container-fluid row p-0">
            <div class="col-md-6 px-3 table-responsive">
                <h3 class="region-name fw-bolder">BRAZIL</h3>
                <table class="table  table-dark table-hover table-border">
                    <tbody>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">1</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/61c2286d2221b.png" alt="LOUD" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        LOUD
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Brazil</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2400</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/5f74a3536c9eb.png" alt="Keyd Stars" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        Keyd Stars
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Brazil</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2117</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">3</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/600f8bbf4603f.png" alt="Ninjas in Pyjamas" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        Ninjas in Pyjamas
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Brazil</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2105</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">4</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/600e14f63980b.png" alt="FURIA" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        FURIA
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Brazil</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2020</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">5</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/61e0e51222586.png" alt="Los Grandes" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        Los Grandes
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Brazil</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">1876</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6 px-3 table-responsive">
                <h3 class="region-name fw-bolder">ASIA-PACIFIC</h3>
                <table class="table table-dark table-hover table-border">
                    <tbody>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">1</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/5f60f058d6a6f.png" alt="Paper Rex" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        Paper Rex
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Singapore</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2400</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/61e40deb3eb5d.png" alt="XERXIA Esports" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        XERXIA Esports
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Thailand</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">2243</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">3</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/62384d905b5bc.png" alt="BOOM Esports" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        BOOM Esports
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Indonesia</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">1992</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">4</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/5fc4d9a75d08c.png" alt="FULL SENSE" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        FULL SENSE
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Thailand</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">1953</p>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-black ">
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">5</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center justify-content-start">
                                    <img src="https://owcdn.net/img/619253e875d82.png" alt="BLEED" width="50px" height="50px">
                                    <p class="txt m-0 ">
                                        BLEED
                                    </p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">Singapore</p>
                                </div>
                            </td>
                            <td>
                                <div class=" d-flex align-items-center justify-content-center">
                                    <p class="p-2 m-1">1886</p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="bg-dark d-flex flex-wrap justify-content-between align-items-center ">

        <div class="col-md-4 d-flex align-items-center">
            <span class="text-muted">A website by Noobs...</span>
        </div>
    </footer>
</body>

</html>