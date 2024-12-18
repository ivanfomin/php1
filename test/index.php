<?php

$res = fopen(__DIR__ . '/1.txt', 'w+');

echo fgets($res);

fwrite($res, 'Hello1234567');

fclose($res);