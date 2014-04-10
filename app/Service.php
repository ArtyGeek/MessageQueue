<?php

require_once('../lib/php/init.php');

echo "Service start<br><br>\n";

$adapter = new \Artygeek\BarbieQueueMysqlAdapter('127.0.0.1', 'artygeek_queue_test', 'root', 'root');
$bq = new \Artygeek\BarbieQueue($adapter);

$bq->slip('shrimp');
$bq->slip('extra shrimp');
$bq->save();


//$data = $bq->pop();
//$data = $bq->pop();

echo "<br>\nService end";

