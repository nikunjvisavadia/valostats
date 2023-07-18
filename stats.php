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
    <link rel="stylesheet" href="./css/stats.css">
    <title>Valorant Player/Agent Stats | Valostats</title>
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
                        <a class="nav-link active " href="stats.php">Statistics</a>
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
        <h4 class="sort-txt fw-bolder">Sort by</h4>
        <hr>
        <form method="post">
            <div class="py-4 row d-flex">
                <div class="col-md-5">
                    <div class="form-check form-check-inline">
                        <input class="btn-check" type="radio" name="criteria" id="danger-outlined1" value="ACS" checked>
                        <label class="btn btn-outline-danger" for="danger-outlined1">Average Combat Score[ACS]</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="btn-check" type="radio" name="criteria" id="danger-outlined2" value="hspr">
                        <label class="btn btn-outline-danger" for="danger-outlined2">HeadShot%</label>
                    </div>
                </div>
                <div class="col-md-3 px-3">
                    <select class="form-select bg-dark select-list" name="agent">
                        <option name="a_nm" disabled selected>Select Agent</option>
                        <?php
                        include "./config.php";
                        $selectquery = "SELECT a_name FROM agents;";

                        $query = mysqli_query($conn, $selectquery);

                        $nums = mysqli_num_rows($query);

                        while ($res = mysqli_fetch_array($query)) {
                        ?>
                            <option name="a_nm" value="<?php echo $res['a_name'] ?>"><?php echo $res['a_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="px-3 col-md-4">
                    <button class="btn btn-outline-danger" type="submit">View Stats</button>
                </div>
            </div>
        </form>
        <hr>
        <div class="container-fluid p-0 table-responsive">
            <table class="table  table-dark table-hover ">
                <thead>
                    <tr>
                        <th scope="col">
                            <div class=" d-flex align-items-center justify-content-center">
                                <p class="p-2 m-1">Player</p>
                            </div>
                        </th>
                        <th scope="col">
                            <div class=" d-flex align-items-center justify-content-center">
                                <p class="p-2 m-1">Team</p>
                            </div>
                        </th>
                        <th scope="col">
                            <div class=" d-flex align-items-center justify-content-center">
                                <p class="p-2 m-1">Region</p>
                            </div>
                        </th>
                        <th scope="col">
                            <div class=" d-flex align-items-center justify-content-center">
                                <p class="p-2 m-1">Agent</p>
                            </div>
                        </th>
                        <th scope="col">
                            <div class=" d-flex align-items-center justify-content-center">
                                <p class="p-2 m-1">ACS</p>
                            </div>
                        </th>
                        <th scope="col">
                            <div class=" d-flex align-items-center justify-content-center">
                                <p class="p-2 m-1">HS%</p>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        include "config.php";
                        $agent = $_POST["agent"];
                        $criteria = $_POST["criteria"];

                        $selectquery = "SELECT p_name,t_name,region,a_name,ACS,hspr
                FROM (player as p join teams as t on p.team_id=t.t_id join agents as a on a.a_id=p.a_id)where a_name='$agent' order by $criteria desc;";

                        $query = mysqli_query($conn, $selectquery);

                        $nums = mysqli_num_rows($query);

                        while ($res = mysqli_fetch_array($query)) {
                    ?>
                            <tr class="bg-black ">
                                <td>
                                    <div class=" d-flex align-items-center justify-content-center">
                                        <p class="p-2 m-1"><?php echo $res['p_name'];  ?></p>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="txt p-2 m-1">
                                            <?php echo $res['t_name'];  ?>
                                        </p>
                                    </div>
                                </td>
                                <td>
                                    <div class=" d-flex align-items-center justify-content-center">
                                        <p class="p-2 m-1"><?php echo $res['region'];  ?></p>
                                    </div>
                                </td>
                                <td>
                                    <div class=" d-flex align-items-center justify-content-center">
                                        <p class="p-2 m-1"><?php echo $res['a_name'];  ?></p>
                                    </div>
                                </td>
                                <td>
                                    <div class=" d-flex align-items-center justify-content-center">
                                        <p class="p-2 m-1"><?php echo $res['ACS'];  ?></p>
                                    </div>
                                </td>
                                <td>
                                    <div class=" d-flex align-items-center justify-content-center">
                                        <p class="p-2 m-1"><?php echo $res['hspr'];  ?></p>
                                    </div>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="bg-dark d-flex flex-wrap justify-content-between align-items-center ">
        <div class="col-md-4 d-flex align-items-center ">
            <span class="text-muted ">A website by Noobs...</span>
        </div>
    </footer>
</body>

</html>