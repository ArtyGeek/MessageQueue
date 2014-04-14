<?php

require_once('../lib/php/init.php');

$adapter = new \Artygeek\BarbieQueueMysqlAdapter('127.0.0.1', 'artygeek_queue_test', 'root', 'root');
$bq = new \Artygeek\BarbieQueue($adapter);

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $json = file_get_contents("php://input");
    $postData = json_decode($json, true);

    $user = $postData['user'];
    $data = $postData['data'];
    $type = $postData['type'];

    $item = array(
        'user' => $user,
        'data' => $data,
        'type' => $type
    );

    $bq->push($item, true);
}
else if ($_SERVER['REQUEST_METHOD'] == 'GET')
{

    $out = array('msgArr' => array());
    do {
        $data = $bq->pop();
        if ($data !== false)
        {
            $out['msgArr'][] = $data;
        }

    } while ($data !== false);

    if (empty($out['msgArr']))
    {
        include('../lib/php/base64Images.php');
        $size = count($base64ImgArr);
        $rand = rand(0, $size);
        if ($rand == $size)
        {
            $out['msgArr'][] = array('user' => 'no-user', 'data' => 'fake-another-shrimp-' . rand(), 'type' => 'text');
        }
        else
        {
            $out['msgArr'][] = array('user' => 'no-user', 'data' => $base64ImgArr[$rand] . rand(), 'type' => 'base64image');
        }
        
    }

    $json = json_encode($out, true);
    echo $json;
    exit(0);

}
else
{
    echo 'METHOD NOT SUPPORTED';
    exit(0);
}
