<?php

function print_alert($message, $error) {
    if (!$error) {
        echo "<div style='width:15vw;position:relative;' class=\"alert alertFade text-light bg-success show\" role=\"alert\">";
    } else {
        echo "<div style='width:15vw;position:relative;' class=\"alert  text-light bg-danger show\" role=\"alert\">";
    }
    echo $message;
    echo '<button type="button" class="close text-light" data-dismiss="alert" aria-label="Close">';
    echo '<span aria-hidden="true">&hearts;</span>';
    echo '</button>';
    echo '</div>';
}
?>