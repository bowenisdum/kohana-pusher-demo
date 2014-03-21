<?php
session_start();
if ( ! isset($_SESSION['user_id']))
{
	$_SESSION['user_id'] = microtime();
}

const APP_KEY = 2a2b6caa913795ddd9ad;
const APP_SECRET = 85de36369c89aadbd576;
const APP_ID = 40856;

if ($user->uid)
{
	$pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);
	$presence_data = array('name' => $user->name);
	echo $pusher->presence_auth($_POST['channel_name'], $_POST['socket_id'], $user->uid, $presence_data);
}
else
{
	header('', true, 403);
	echo( "Forbidden" );
}
?>
