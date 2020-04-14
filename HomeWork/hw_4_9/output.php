<?php

if (isset($_POST['idCheck']) && strlen($_POST['idNameInput']) > 0) {
    echo '<h3 style="text-align: center">Sveiki, ' . $_POST['idNameInput'] . '</h3>';
} elseif (strlen($_POST['idNameInput']) > 0) {
    echo '
        <div style="margin-top: 200 px">
        <h3 style="text-align: center">Viso gero, ' . $_POST['idNameInput'] . '</h3>
        </div>
    ';
} else {
    echo '
        <div style="margin-top: 200 px">
        <h3 style="text-align: center">Trūksta duomenų</h3>
        </div>
    ';
}
