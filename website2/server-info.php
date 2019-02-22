<?php 
// $_SERVER SUPER GLOBAL
$server = [
	'Server Name'=> $_SERVER['SERVER_NAME'],
	'Server Software' => $_SERVER['SERVER_SOFTWARE'],
	'Document Root' => $_SERVER['DOCUMENT_ROOT'],
	'Current Page' => $_SERVER['PHP_SELF']
];
echo $server['Server Name'];
echo $server['Server Software'];
echo $server['Document Root'];
echo $server['Current Page'];

$client = [
	'Client System Info'=> $_SERVER['HTTP_USER_AGENT']
];
echo $client['Client System Info'];
?>
