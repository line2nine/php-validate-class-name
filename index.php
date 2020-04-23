<?php
function validateClassName($str)
{
    $regexp = '/^(C|A|P)[0-9]{4}(G|H|I|K|L|M)$/';
    if (preg_match($regexp, $str)) {
        return true;
    }
    return false;
}

$className = "C0220H";
$className2 = "C1551G";
$className3 = "M0318G";
$className4 = "P0323A";

echo validateClassName($className4);