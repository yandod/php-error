<?php
function hoge()
{
        throw new Exception('Error!');
 }

try {
    hoge();
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

echo "Hi";