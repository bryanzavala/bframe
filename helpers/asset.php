<?php
function asset($path)
{
    $path = str_replace('index.php', null, $_SERVER['PHP_SELF']) . 'resources/assets/' . $path;
    echo $path;
}