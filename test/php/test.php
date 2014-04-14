#!/usr/bin/php
<?php

require_once('../../lib/php/init.php');


// Just a cute function to test
function barbyQueuePopAndPrint($bq)
{
    try {
        $item = $bq->pop();
        if (false === $item) {
            echo "Warning: " . get_class($bq) . " is empty slip an extra item on it\n";
        } else {
            echo "$item off the " . get_class($bq) . "\n";        
        }

    } catch (\Exception $ex) {
        echo $ex->getMessage(), "\n";
    }
}


echo "Test Beginning\n\n";

$adapter = new \Artygeek\BarbieQueueMysqlAdapter('127.0.0.1', 'artygeek_queue_test', 'root', 'root');
$bq = new \Artygeek\BarbieQueue($adapter);

$bq->clear();

barbieQueuePopAndPrint($bq);


$bq->slipExtra('shrimp', true);
barbieQueuePopAndPrint($bq);
barbieQueuePopAndPrint($bq);

$bq
    ->slipExtra('extra shrimp')
    ->slipExtra('extra shrimp')
    ->slipExtra('extra shrimp');
$bq->save();

barbieQueuePopAndPrint($bq);
barbieQueuePopAndPrint($bq);
barbieQueuePopAndPrint($bq);

barbieQueuePopAndPrint($bq);
barbieQueuePopAndPrint($bq);

$bq->slipExtra('extra shrimp', true);
barbieQueuePopAndPrint($bq);

barbieQueuePopAndPrint($bq);

echo "\nTest Ending\n";


