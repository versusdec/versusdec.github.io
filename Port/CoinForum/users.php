<?php
define('ROOT', rtrim(realpath(__DIR__), '/'));

include_once ROOT.'/core/autoload.php';

$redis = new Redis();
$redis->connect("127.0.0.1", 6379);
$redis->auth("mn3g1esicV6gRFNu0dWsckWdETzz4lhz");

$config = \core\config::getInstance();
$config->set(__DIR__.'/config.ini');

$db = \core\database::getInstance();

$users = $redis->hGetAll("users");
foreach ($users as $user) {
	$user = json_decode($user, 1);
	$user['id'] = '0x'.substr($user['id'],1);
	$db->insert('users', $user, true);
}