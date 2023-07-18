<?php
session_start();
if($_SESSION['loggedin'] != true || $_SESSION['username'] != 'admin')
{
  header('location: ../login.php');
}
require '../config.php';

if (isset($_POST['t_update'])) {
    $t_id = $_POST["t_id"];
    $t_name = $_POST["t_name"];
    $region = $_POST["region"];
    $rk_pts = $_POST["rank_pts"];

    $query = "UPDATE teams SET t_id='$t_id', t_name='$t_name', region='$region', rank_pts='$rk_pts' WHERE t_id='$t_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        header('location: teams.php');
        exit(0);
    } else {
        echo "Record Not Updated";
        header('location: teams.php');
        exit(0);
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Team</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/b31b225caf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <!-- NavBar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand fw-bold text-uppercases" href="index.php">ValoStats</a>
            <a class="btn btn-outline-secondary ms-auto fw-bold" href="teams.php">Back</a>
        </div>
        </div>
    </nav>
    <!-- NavBar -->


    <!-- offacanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <a href="index.php" class="nav-link px-3 ">
                            <span class="mx-1"><i class="fa-solid fa-gauge"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="agents.php" class="nav-link px-3 ">
                            <span class="mx-1"><i class="fa-brands fa-magento"></i></span>
                            <span>Manage Agents</span>
                        </a>
                    </li>
                    <li>
                        <a href="players.php" class="nav-link px-3">
                            <span class="mx-1"><i class="fa-solid fa-child-rifle"></i></span>
                            <span>Manage Players</span>
                        </a>
                    </li>
                    <li>
                        <a href="users.php" class="nav-link px-3">
                            <span class="mx-1"><i class="fa-solid fa-users"></i></span>
                            <span>Manage Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="teams.php" class="nav-link px-3 active">
                            <span class="mx-1"><i class="fa-solid fa-people-group"></i></span>
                            <span>Manage Teams</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <span class="fw-bold fs-3">Update Team</span>
            <hr>
            <?php
            if (isset($_GET['t_id'])) {
                $t_id = $_GET['t_id'];
                $query = "SELECT * FROM teams WHERE t_id = '$t_id' ";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    $result = mysqli_fetch_array($query_run);
            ?>
                    <form method="POST" class="fw-bold">
                        <div class="row flex frm">
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label class="form-label">Team ID</label>
                                    <input type="text" class="form-control" value="<?php echo $result['t_id'];?>" name="t_id" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Team Name</label>
                                    <input type="text" class="form-control" value="<?php echo $result['t_name'];?>" name="t_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row flex frm">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label">Region</label>
                                    <input type="text" class="form-control" value="<?php echo $result['region'];?>" name="region" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label">Rank Points</label>
                                    <input type="text" class="form-control" value="<?php echo $result['rank_pts'];?>" name="rank_pts" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-outline-dark" name="t_update">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
            <?php
                } else {
                    echo "<h4>No such record found</h4>";
                }
            }
            ?>

            <hr>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>