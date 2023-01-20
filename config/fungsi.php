<?php

function scanFile($dir, $namaFile)
{
    $status = 0;
    $files = scandir($dir);

    foreach ($files as $file) {
        if (strstr($file, $namaFile . ".php")) {
            $status = 1;
        }
    }
    return $status;
}
