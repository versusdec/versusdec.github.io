<?php
define('ROOT', rtrim(realpath(__DIR__), '/'));

include_once ROOT.'/core/autoload.php';

$redis = new Redis();
$redis->connect("127.0.0.1", 6379);
$redis->auth("mn3g1esicV6gRFNu0dWsckWdETzz4lhz");

$config = \core\config::getInstance();
$config->set(__DIR__.'/config.ini');

$db = \core\database::getInstance();

$trigger = ['time' => microtime(true), 'count' => 0];

while (true) {
	$messages = [];
	while ($message = $redis->rPop("messages")) {
		$message = json_decode($message, true);
		$messages[] = [
			'id' => '0x'.$message['id'],
			'reply_id' => isset($message['reply_id'])?('0x'.$message['reply_id']):null,
			'channel_id' => '0x'.substr($message['to']['id'], 1),
			'user_id' => '0x'.substr($message['from']['id'], 1),
			'date' => date('Y-m-d H:i:s', $message['date']),
			'text' => $message['text']??''
		];
		if (count($messages) >= 1000) {
			break;
		}
	}
	
	if (count($messages)) {
		$db->multi_insert('messages', $messages, true);
	}
	
	$mediums = [];
	while ($media = $redis->rPop("media")) {
		$media = json_decode($media, true);
		$mediums[] = [
			'message_id' => '0x'.$media['message_id'],
			'type' => $media['type'],
			'file' => $media['file']??null,
			'url' => $media['url']??null,
			'title' => $media['title']??null,
			'description' => $media['description']??null,
			'caption'=> $media['caption']??null
		];
		if (count($mediums) >= 1000) {
			break;
		}
	}
	
	if (count($mediums)) {
		$db->multi_insert('media', $mediums, true);
	}
	
	usleep(5000);
}