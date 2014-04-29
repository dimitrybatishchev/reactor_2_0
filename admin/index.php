<?php

$config = include "config.php";

$db = new PDO($config['db']['dsn'], $config['db']['user'], $config['db']['pass']);

