<?php include 'includes/ewp.php';


$sqlA = "SELECT * FROM Actions WHERE trkfix_action_cat = 'Tools'";
$queryA = mysqli_query($con, $sqlA);



while ($actions = mysqli_fetch_array($queryA)) {
    echo "<div class='large-2 columns actionables text-center'>";

    echo "<i style='height:5vh;' class='" . $actions['trkfix_action_icon'] . "'></i><br />";

    echo "<span style='font-size: 14pt;'>" . $actions['trkfix_action_title'] . "</span>";

    echo "<hr />";

    echo "<p style='font-size: 8pt;'>" . $actions['trkfix_action_desc'] . "</p>";

    echo '<a href="#" class="deeperDig text-center" data-reveal-id="mid' . $actions['trkfix_action_id'] . '">GO</a>';

    echo '<div id="mid' . $actions['trkfix_action_id'] . '" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">';

    echo '<h2 id="modalTitle">' . $actions['trkfix_action_title'] . '</h2>';

    echo '<div>';
    echo "<p style='font-size: 10pt;'>" . $actions['trkfix_action_desc'] . "</p>";
    echo "<hr />";
    echo '<p>' . $actions['trkfix_action_content'] . '</p>';
    echo $actions['trkfix_action_code'];
    echo '<a class="close-reveal-modal" aria-label="Close">&#215;</a>';
    echo "<a href='#' id='delaction' class='button tiny alert'>Delete</a>";

    echo "</div>";

    echo "</div>";

    echo "</div>";
}

?>


<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>

<script>
    $(document).on('click', '#delaction', function() {

        var todel = $(this).parent().parent().attr('id');


        todel = todel.replace('mid', '');




        $.post("delTask.php", {
            delTASK: todel
        }, function(data) {

            alert(data);


            $('#dsb_a').load('dashboardactions.php');


        });



    });
</script>

<script>
    /*    $(document).on('click', '#crud_users', function() {
        alert("this was clicked");
        $(#crud_content).load('view_users.php');
    }); */
</script>


<script>
    $(document).foundation();
</script>