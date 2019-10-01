<?php
//$config = unserialize(file_get_contents("session.madeline"));
//print_r($config['API']['settings']['authorization']['rsa_keys']); exit;

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$dialogs = $MadelineProto->get_dialogs();

foreach ($dialogs as &$dialog) {
	if (isset($dialog['channel_id'])) {
		$_dialog = $MadelineProto->get_full_info("-100".$dialog['channel_id']);
		$dialog = [
			'id' => $_dialog['channel_id'],
			'title' => $_dialog['Chat']['title'],
			'username' => $_dialog['Chat']['username'],
			'bot_api_id' => $_dialog['bot_api_id'],
			'photo' => $_dialog['Chat']['photo']['photo_big'],
			'about' => $_dialog['full']['about'],
			'participants_count' => $_dialog['full']['participants_count']
		];
		
		$messages = $MadelineProto->messages->getHistory([
			'peer' => $_dialog['bot_api_id'],
			'offset_id' => 7163,
			'offset_date' => 0,
			'add_offset' => 0,
			'limit' => 100,
			'max_id' => 0,
			'min_id' => 0
		]);
		
		print_r($messages);
		
		print_r($dialog);
		echo json_encode($dialog);
		
		exit;
	}
	
	sleep(1);
}

//print_r($MadelineProto->get_download_info('05000000247fa9400045160000000000b22c361ad4678c41'));