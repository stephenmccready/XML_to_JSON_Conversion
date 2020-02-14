<?php

$xml = simplexml_load_string("<xml>" . $_GET['xml'] . "</xml>");
$json = json_encode($xml);
echo $json;
