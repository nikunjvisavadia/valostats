<?php
$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include "config.php";
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["passn"];
    $cpassword = $_POST["cpassn"];
    $exists = false;
    if(($password == $cpassword) && $exists == false)
    {
        $sql = "INSERT INTO `users` (`fname`, `lname`, `username`, `email`, `password`) VALUES ('$fname', '$lname', '$username', '$email', '$password');";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            $showalert = true;
        }
    }
    else
    {
        $showerror = "Password do not match";
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
    <link rel="stylesheet" href="./css/signup.css">
    <title>SignUp</title>
    <script>
        function check() {
    var msg = "";
    var rename = /^[A-Z]{1}[a-z]*$/;

    var reusername = /^[A-Za-Z]{1,9}$/;

    var reemail = /^[a-zA-z0-9_.-]+@[a-zA-z_.-]+\.[a-zA-z]{2,4}$/;

    var repass = /^\w{4,10}$/;



    if (!rename.test(signufrm.fname.value))
        msg += "Invalid firstname!<br> ";

    if (!rename.test(signupfrm.lname.value))
        msg += "Invalid lastname! ";

    if (!reusername.test(signupfrm.username.value))
        msg += "Invalid username! ";

    if (!reemail.test(signupfrm.email.value))
        msg += "Invalid email! ";

    if (!repass.test(signupfrm.password.value))
        msg += "Invalid password  ! ";

    if (!signupfrm.passwordn.value == signupfrm.cpassword.value)
        msg += "Please Enter same password as above..!";

    if (msg != "") {
        alert(msg);
        return false;
    }
    return true;
}
    </script>
</head>
<!-- <script src="signup.js"></script> -->
<body class="text-center">
<?php
        if($showalert)
        {
        echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Success!</strong>Your account is now created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      header("location: login.php");
        }
        if($showerror){
            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> '. $showerror.'
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div> ';
            }
        
        ?>
    <div class="row ">
        <div class="col-sm-4 p-0"></div>
        <div class="col-sm-4">
            <div class="login_form">
                <form method="POST" name="signupfrm">
                    <img class="mb-2 logo img-fluid" src="img/logo_header.png" alt="Valostats">
                    <h1 class="h3 mb-3 fw-bolder ">SignUp to Valostats</h1>
                    <div class="mb-3 row">
                        <div class="col-sm-6">
                            <input type="text" class="text_area form-control fw-bolder" name="fname" placeholder="Enter Firstname" required>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="text_area form-control fw-bolder" name="lname" placeholder="Enter Lastname" required>
                        </div>

                    </div>
                    <div class="mb-3">
                        <input type="text" class="text_area form-control fw-bolder" name="username" placeholder="Enter Username" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="text_area form-control fw-bolder" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="text_area form-control fw-bolder" name="passn" placeholder="Enter Password" >
                    </div>
                    <div class="mb-3">
                        <input type="password" class="text_area form-control fw-bolder" name="cpassn" placeholder="Confirm Password" required>
                        <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                    </div>
                    <input class="my-4 w-100 login_btn btn btn-lg fw-bolder" type="submit" name="btnsubmit" onclick="return check();" required>SignUp</input>
                </form>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    </script>
</body>

</html>