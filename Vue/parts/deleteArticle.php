<?php
if (1){
    echo "<div class='text-center p-5 m-3 text-dark'>
            <h2>Are you sure to delete $id ?</h2>
            <a class='btn btn-success m-5' href='/exempleMVC/index.php?controller=admin&action=renderAdmin'>Cancel</a>
            <a class='btn btn-danger m-5' href='/exempleMVC/index.php?controller=admin&action=delete&id=". $_GET['id'] ."'>Confirm</button>
          </div>";
}
?>