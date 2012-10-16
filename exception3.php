<?php
function hoge()
{
    if (true) {
        throw new Exception('Error!');
    }
}

try {
    hoge();
} catch (Excepton $e) {
    echo $e->getMessage();
    exit;
}