<?php
$login = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include "config.php";
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($username == "admin" && $password == "admin")
    {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: admin/index.php");
    }
    else if($num == 1)
    {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: index.php");
    }
    else
    {
        $showerror = "Invalid Credentials";
    }
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
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>
<?php
        if($login)
        {
        echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are Logged In.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
        }
        if($showerror){
            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> '. $showerror.'
            </div> ';
            }
        
        ?>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="login_form mx-4">
                <form action="login.php" method="POST">
                    <img class="mb-2 logo img-fluid" src="image/logo_header.png" alt="Valostats">
                    <h1 class="h3 mb-3 fw-bolder ">Login to Valostats</h1>
                    <div class="mb-3">
                        <input type="text" class="text_area form-control fw-bolder" name="username" placeholder="Enter Username">
                    </div>
                    <div class="mb-3">

                        <input type="password" class="text_area form-control fw-bolder" name="password" placeholder="Enter Password">
                    </div>


                    <button class=" my-4 w-100 login_btn btn btn-lg fw-bolder" type="submit">Login</button>
                </form>
                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
<!-- <script src="login.js"></script> -->
</html>