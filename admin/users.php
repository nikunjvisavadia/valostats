<?php
session_start();
if($_SESSION['loggedin'] != true || $_SESSION['username'] != 'admin')
{
  header('location: ../login.php');
}
require '../config.php';
if (isset($_POST['dlt_user'])) {
  $user = $_POST['dlt_user'];

  $query = "DELETE FROM users WHERE username ='$user'";
  $ruin = mysqli_query($conn, $query);

  if ($ruin) {
    header('location: users.php');
    exit(0);
  }
}
$showalert = false;
$showerror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists = false;
  if (($password == $cpassword) && $exists == false) {
    $sql = "INSERT INTO `users` (`fname`, `lname`, `username`, `email`, `password`) VALUES ('$fname', '$lname', '$username', '$email', '$password');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $showalert = true;
    }
  } else {
    $showerror = "Password do not match";
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Users</title>
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function() {
      $('#users').DataTable();
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
              <span>Add Agents</span>
            </a>
          </li>
          <li>
            <a href="players.php" class="nav-link px-3">
              <span class="mx-1"><i class="fa-solid fa-child-rifle"></i></span>
              <span>Add Players</span>
            </a>
          </li>
          <li>
            <a href="users.php" class="nav-link px-3 active">
              <span class="mx-1"><i class="fa-solid fa-users"></i></span>
              <span>Manage Users</span>
            </a>
          </li>
          <li>
            <a href="teams.php" class="nav-link px-3">
              <span class="mx-1"><i class="fa-solid fa-people-group"></i></span>
              <span>Add Teams</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <?php
      if ($showalert) {
        header("location: users.php");
        exit(0);
      }
      ?>
      <span class="fw-bold fs-3">Add User</span>
      <hr>
      <form method="POST" class="fw-bold">
        <div class="row flex frm">
          <div class="col-md-3">
            <div class="mb-3">
              <label class="form-label">FirstName</label>
              <input type="text" class="form-control" name="fname">
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label class="form-label">LastName</label>
              <input type="text" class="form-control" name="lname">
            </div>
          </div>
        </div>
        <div class="row flex frm">
          <div class="col-md-2">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" name="username">
            </div>
          </div>
          <div class="col-md-3">
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
          </div>
        </div>
        <div class="row flex frm">
          <div class="col-md-2">
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
          </div>
          <div class="col-md-2">
            <div class="mb-3">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="cpassword">
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
      <span class="fw-bold fs-3">Manage Users</span>
      <hr>
      <div class="table-responsive">
        <table id="users" class="table table-hover table-borderless table-dark py-2" style="width: 100%">
          <thead>
            <tr>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $selectquery = "SELECT * FROM users";

            $query = mysqli_query($conn, $selectquery);

            $nums = mysqli_num_rows($query);

            while ($res = mysqli_fetch_array($query)) {
            ?>
              <tr>
                <td>
                  <?php echo $res['fname'];  ?>
                </td>
                <td>
                  <?php echo $res['lname'];  ?>
                </td>
                <td>
                  <?php echo $res['username'];  ?>
                </td>
                <td>
                  <?php echo $res['email'];  ?>
                </td>
                <td>
                  <?php echo $res['password'];  ?>
                </td>
                <td>
                  <a href="edit_user.php?username=<?php echo $res['username']; ?>" class="btn btn-outline-success btn-sm">Edit</a>
                  <form method="POST" class="d-inline">
                    <button type="submit" value="<?php echo $res['username'];  ?>" class="btn btn-outline-danger btn-sm" name="dlt_user">Delete</button>
                  </form>
                </td>
              <?php
            }
              ?>
          </tbody>
          <tfoot>
            <tr>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
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