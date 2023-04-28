<?php

include_once __DIR__ . '/autoload.php';

$article = new Article('Четвертая статья!', 'zdfligjnsdriofgnsediofnszediofnsoifnflkislf ');

header('Location: index.php' );