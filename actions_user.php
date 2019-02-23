<?php include 'includes/ewp.php';

if (isset($_POST['delid'])) {
    $user_id = $_POST['delid'];

    $userdd = mysqli_query($con, "DELETE FROM login WHERE trkfx_login_id = $user_id");

    if ($userdd) {
        echo "User deleted succesfully";
    }
} elseif (isset($_POST['upid'])) {
    $user_id = $_POST['upid'];
    $user_name = $_POST['uname'];
    $user_pass = $_POST['upass'];
    $user_role = $_POST['urole'];
    
    $upuser = mysqli_query($con, "UPDATE login SET trkfx_login_user=' $user_name', trkfx_login_pswd=' $user_pass', trkfx_login_role=' $user_role' WHERE trkfx_login_id =$user_id");

    if ($upuser) {
        echo "User updated succesfully!";
    }
} elseif (isset($_POST['newus'])) {
    $user_name = $_POST['uname'];
    $user_pass = $_POST['upass'];
    $user_role = $_POST['urole'];

    $newuser = mysqli_query($con, "INSERT INTO login(trkfx_login_user, trkfx_login_pswd, trkfx_login_role) values('$user_name','$user_pass','$user_role')");
    if ($newuser) {
        echo "User created succesfully!";
    }
}
