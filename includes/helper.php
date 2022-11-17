<?php
function changeTitle(string $path, string $title) {
    // Output Buffer to replace title of every page
    ob_start();
    require($path);
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace("%TITLE%", $title, $buffer);
    echo $buffer;
}