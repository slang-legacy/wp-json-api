--TEST--
core.get_date_posts by month
--FILE--
<?php

require_once 'HTTP/Client.php';
$http = new HTTP_Client();
$http->get('http://localhost/?json=core.get_date_posts&date=2013-01&dev=1');
$response = $http->currentResponse();
$response = json_decode($response['body']);
$post = $response->posts[0];

echo "Response status: $response->status\n";
echo "Post count: $response->count\n";
echo "Post title: $post->title\n";

?>
--EXPECT--
Response status: ok
Post count: 5
Post title: Markup: HTML Tags and Formatting
