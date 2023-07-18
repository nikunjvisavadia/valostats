<?php
session_start();
if($_SESSION['loggedin'] != true || $_SESSION['username'] != 'admin')
{
  header('location: ../login.php');
}
require '../config.php';
if (isset($_POST['dlt_player'])) {
    $player_id = $_POST['dlt_player'];

    $query = "DELETE FROM player WHERE p_id ='$player_id'";
    $ruin = mysqli_query($conn, $query);

    if ($ruin) {
        header('location: players.php');
        exit(0);
    }
}


$showalert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $p_id = $_POST["p_id"];
    $p_name = $_POST["p_name"];
    $t_id = $_POST["t_id"];
    $a_id = $_POST["a_id"];
    $acs = $_POST["acs"];
    $hspr = $_POST["hspr"];
    $exists = false;
    $sql = "INSERT INTO `player` (`p_id`, `p_name`, `team_id`, `ACS`, `hspr`, `a_id`) VALUES ('$p_id', '$p_name', '$t_id', '$acs', '$hspr','$a_id');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $showalert = true;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Player</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#players').DataTable();
        });
    </script>
    <script src="https://kit.fontawesome.com/b31b225caf.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- NavBar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand fw-bold text-uppercases" href="index.php">ValoStats</a>
            <a class="btn btn-outline-secondary ms-auto fw-bold" href="../logout.php">LogOut</a>
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
                        <a href="players.php" class="nav-link px-3 active">
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
                        <a href="teams.php" class="nav-link px-3">
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
        <?php
        if ($showalert) {
            header("location: players.php");
        }
        ?>
        <div class="container-fluid">
            <span class="fw-bold fs-3">Add New Player</span>
            <hr>
            <form method="POST">
                <div class="row flex frm">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Player ID</label>
                            <input type="text" class="form-control" name="p_id" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label class="form-label">Player Name</label>
                            <input type="text   " class="form-control" name="p_name">
                        </div>
                    </div>
                </div>
                <div class="row flex frm">
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label">Team ID</label>
                            <input type="text" class="form-control" name="t_id" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label">Agent ID</label>
                            <input type="text" class="form-control" name="a_id" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label">ACS</label>
                            <input type="text" class="form-control" name="acs" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <label class="form-label">Headshot%(hspr)</label>
                            <input type="text" class="form-control" name="hspr" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-dark"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
            <span class="fw-bold fs-3">Manage Player</span>
            <hr>
            <div class="table-responsive ">
                <table id="players" class="table table-hover table-borderless table-dark py-2" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Player ID</th>
                            <th>Player Name</th>
                            <th>Team ID</th>
                            <th>ACS</th>
                            <th>HeadShot%(hspr)</th>
                            <th>Agent ID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $selectquery = "SELECT * FROM player";

                        $query = mysqli_query($conn, $selectquery);

                        $nums = mysqli_num_rows($query);

                        while ($res = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $res['p_id'];  ?>
                                </td>
                                <td>
                                    <?php echo $res['p_name'];  ?>
                                </td>
                                <td>
                                    <?php echo $res['team_id'];  ?>
                                </td>
                                <td>
                                    <?php echo $res['ACS'];  ?>
                                </td>
                                <td>
                                    <?php echo $res['hspr'];  ?>
                                </td>
                                <td>
                                    <?php echo $res['a_id'];  ?>
                                </td>
                                <td>
                                    <a href="player_edit.php?p_id=<?php echo $res['p_id']; ?>" class="btn btn-outline-success btn-sm">Edit</a>
                                    <form method="POST" class="d-inline">
                                        <button type="submit" value="<?php echo $res['p_id'];  ?>" class="btn btn-outline-danger btn-sm" name="dlt_player">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Player ID</th>
                            <th>Player Name</th>
                            <th>Team ID</th>
                            <th>ACS</th>
                            <th>HeadShot%(hspr)</th>
                            <th>Agent ID</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>