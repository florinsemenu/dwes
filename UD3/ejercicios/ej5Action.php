<?php
if (isset($_POST['nombres'])&& !empty($_POST['nombres'])) {
    echo "llego al if";
    foreach ($_POST['nombres'] as $nombre ) {
        echo "<li>$nombre</li>";
    }
} else {
    echo"no hay nombres";
}
