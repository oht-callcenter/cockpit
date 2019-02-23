<?php include 'includes/ewp.php';

if (!isset($_SESSION['role'])) {
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Viewer</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <style>
        .peque {
            font-size: 8pt;
        }
    </style>

</head>

<body>

    <div class="row">
        <div class="large-12 columns">
            <div class="text-center">
                <h2><i class="fas fa-users"></i> &nbsp; View existing users</h2>
            </div>
            <hr />
            <table id="user_table" class="display compact">
                <thead>
                    <th>ID</th>
                    <th>User</th>
                    <th>Role</th>
                    <th>Created</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php $allusers = mysqli_query($con, "SELECT * FROM login");
                    while ($user = mysqli_fetch_array($allusers)) {
                        echo '<tr id="' . $user['trkfx_login_id'] . '">';
                        echo '<td class="peque">' . $user['trkfx_login_id'] . '</td>';
                        echo '<td class="peque">' . $user['trkfx_login_user'] . '</td>';
                        echo '<td class="peque">';
                        if ($user['trkfx_login_role'] == 1) {
                            echo 'Dispatcher';
                        } elseif ($user['trkfx_login_role'] == 3) {
                            echo 'Admin';
                        }
                        echo '</td>';
                        echo '<td class="peque">' . $user['trkfx_login_created_on'] . '</td>';
                        echo "<td class='pencilEdit'><a class='openitmod'data-reveal-id='myModal'><i id='pull_it' class='fi-pencil'></i></a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <a href="#" id="newuser" class="button tiny success" data-reveal-id='myModal2'><i class="fas fa-plus"></i></a>
        </div>
    </div>
    <!-- This modal is to EDIT existing users -->
    <div id="myModal" class="reveal-modal tiny" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h3 id="modalTitle">Edit Users</h3>
        <hr />
        <div id="modcont"></div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>
    <!-- This modal is to ADD new user -->
    <div id="myModal2" class="reveal-modal tiny" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        <h3 id="modalTitle"> New User</h3>
        <hr />
        <div id="modnew"></div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>



    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
    <script src="js/foundation/foundation.reveal.js"></script>

    <!-- To run dataTables with options modify here: -->
    <script>
        $(document).ready(function() {
            $('#user_table').DataTable();
        });
    </script>
    <!-- This function enables the Editing of existing user -->
    <script>
        $(document).on('click', '.pencilEdit', function(data) {
            var editID = $(this).parent().attr('id');
            //var editID = '12';
            //alert(editID);
            $('#modcont').load('update_user.php', {
                userid: editID
            });
        });
    </script>

    <script>
        $(document).on('click', '#newuser', function(data) {
            //alert('Gonna make a new one');
            $('#modnew').load('new_user.php');
        });
    </script>

    <script>
        $(document).foundation();
    </script>
</body>