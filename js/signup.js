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

    if (!reemail.test(signupfrm.emailn.value))
        msg += "Invalid email! ";

    if (!repass.test(signupfrm.passwordn.value))
        msg += "Invalid password  ! ";

    if (!signupfrm.passwordn.value == signupfrm.cpassword.value)
        msg += "Please Enter same password as above..!";

    if (msg != "") {
        alert(msg);
        return false;
    }
    return true;
}