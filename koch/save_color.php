<?php
if (isset($_GET['color'])) {
    file_put_contents('color.txt', $_GET['color']);
    echo "Saved: " . $_GET['color'];
}
?>