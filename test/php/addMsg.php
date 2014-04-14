#!/usr/bin/php
<?php

if (isset($argv[1]))
{
    $msg = $argv[1];
}
else
{
    $msg = 'another shrimp';
}

require_once('../../lib/php/init.php');

$adapter = new \Artygeek\BarbieQueueMysqlAdapter('127.0.0.1', 'artygeek_queue_test', 'root', 'root');
$bq = new \Artygeek\BarbieQueue($adapter);


$bq->slipExtra($msg, true);
