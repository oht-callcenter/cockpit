<?php include 'includes/ewp.php';

echo '<label for="uname">Username</label>';
echo '<input type="text" name ="uname" id="uname" placeholder="Type username here...">';
echo '<label for="upass">Password</label>';
echo '<input type="password" name ="upass" id="upass">';
echo '<label for="urole">User Role</label>';
echo '<select name= "urole" id= "urole">';
echo '<option selected disabled hidden>';
echo 'Select User Role';
echo '</option>';
echo '<option value="1">Dispatcher</option><option value="3">Admin</option>';
echo '</select>';
echo '<br />';
echo '<a href="#" id="newu" class="button success tiny"><i class="fas fa-user-plus"></i></a>';

?>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script>
    $(document).on('click', '#newu', function() {
        var newus = 'yes';
        var uname = $("#uname").val();
        var upass = $("#upass").val();
        var urole = $('#urole option:selected').val();

        //alert(upid + ' ' + uname + ' ' + upass + ' ' + urole);

        $.post("actions_user.php", {
            newus: newus,
            uname: uname,
            upass: upass,
            urole: urole
        }, function(data) {
            alert(data);
            location.reload();
        });

    })
</script>