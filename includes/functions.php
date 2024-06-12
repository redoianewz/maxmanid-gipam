<?php
// function.php
function lg_($key)
{
    global $path;
    $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';
    $translations = json_decode(file_get_contents($path), true);
    return $translations[$lang][$key] ?? $key;
}






