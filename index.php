<?php

$config = include "admin/config.php";

$db = new PDO($config['db']['dsn'], $config['db']['user'], $config['db']['pass']);

$db->exec("set names utf8");

$sth = $db->prepare( "select * from catalogs" );
$sth->execute();
$catalog = $sth->fetch();

var_dump($catalog);

var_dump('end');

