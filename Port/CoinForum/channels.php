<?php
define('ROOT', rtrim(realpath(__DIR__), '/'));

include_once ROOT.'/core/autoload.php';

$redis = new Redis();
$redis->connect("127.0.0.1", 6379);
$redis->auth("mn3g1esicV6gRFNu0dWsckWdETzz4lhz");

$config = \core\config::getInstance();
$config->set(__DIR__.'/config.ini');

$db = \core\database::getInstance();

$channels = $redis->hGetAll("channel");
foreach ($channels as $channel) {
	$channel = json_decode($channel, 1);
	$channel['id'] = '0x'.substr($channel['id'],1);
	$db->insert('channels', $channel, true);
}