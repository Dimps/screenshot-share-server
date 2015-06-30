<?php

if (file_exists("i.png")) {
    $name = date("Y.m.d_G.i.s_", strtotime("+3 hours")) . substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 8)), 0, 8) . ".png";
    $success = rename("i.png", $name);
    
    if ($success) {
        echo "http://4.stefantsov.com/s/?", $name;
    } else {
        echo "couldn't rename";
    }
} else {
    echo "failed";
}

?>
