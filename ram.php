<?php
set_time_limit(0);
ini_set('memory_limit', "-1");

$size = 10000000;
$ramArray = [];
for ($i = 0; $i < $size; $i++) {
    $ramArray[] = str_repeat('A', 1024);
}
echo "RAM done!";
