<?php

function get_nama_photo($path)
{
    $expPath = explode('/', $path);
    return $expPath[count($expPath) - 1];
}
