<?php
function hoge()
{
    if (true) {
        return new Exception('Error!');
    }
}

try {
    hoge();
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}