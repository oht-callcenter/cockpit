<?php include 'includes/ewp.php';

if (isset($_POST['userid'])) {
    $user_id = $_POST['userid'];

    $get_user = mysqli_query($con, "SELECT * FROM login WHERE trkfx_login_id = '$user_id'");
    while ($gotu = mysqli_fetch_array($get_user)) {
        echo '<label for="uname">Username</label>';
        echo '<input type="text" name ="uname" id="uname" value="' . $gotu['trkfx_login_user'] . '">';
        echo '<label for="upass">Password</label>';
        echo '<input type="password" name ="upass" id="upass" value="' . $gotu['trkfx_login_pswd'] . '">';
        echo '<label for="urole">User Role</label>';
        echo '<select name= "urole" id= "urole">';
        echo '<option selected disabled hidden>';
        if ($gotu['trkfx_login_role'] == 1) {
            echo 'Dispatcher';
        } elseif ($gotu['trkfx_login_role'] == 3) {
            echo 'Admin';
        }
        echo '</option>';
        echo '<option value="1">Dispatcher</option><option value="3">Admin</option>';
        echo '</select>';
        echo '
            <ul class="button-group round text-center">
                <li id="' . $user_id . '"><a id="del_it" href="#" class="button small alert"><i class="far fa-trash-alt"></i></a></li>
                <li id="' . $user_id . '"><a id="change_it" href="#" class="button small success"><i class="far fa-save"></i></a></li>
            </ul>';
    }
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
    $(document).on('click', '#del_it', function() {
        var delit = $(this).parent().attr('id');
        $.post("actions_user.php", {
            delid: delit
        }, function(data) {
            alert(data);
            location.reload();

        });
    })
</script>

<script>
    $(document).on('click', '#change_it', function() {
        var upid = $(this).parent().attr('id');
        var uname = $("#uname").val();
        var upass = $("#upass").val();
        var urole = $('#urole option:selected').val();

        //alert(upid + ' ' + uname + ' ' + upass + ' ' + urole);


        $.post("actions_user.php", {
            upid: upid,
            uname: uname,
            upass: upass,
            urole: urole
        }, function(data) {
            alert(data);
            location.reload();
        });

    })
</script>