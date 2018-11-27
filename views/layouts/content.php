<?php
$p = isset($_GET['p']) ? $_GET['p'] : null;
$q = isset($_GET['q']) ? $_GET['q'] : null;
$ext = '.php';
if ($p === null) {
    $p = 'index' . $ext;
} else {
    if ($q === null) {
        $p = $p . $ext;
    } else {
        $p = $p . '/' . $q . $ext;
    }
}
include_once dirname(__DIR__) . '/pages/' . $p;