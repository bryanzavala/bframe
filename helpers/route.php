<?php
function route($route)
{
    $root = str_replace('/index.php', null, $_SERVER['PHP_SELF']);
    echo $root . $route;
}