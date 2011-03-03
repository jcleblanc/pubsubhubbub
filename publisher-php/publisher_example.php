<?php
include("publisher.php");

//define hub and feeds
$hub = 'http://pubsubhubbub.appspot.com/';
$feed = array('http://www.example.com/feed1.xml',
              'http://www.example.com/feed2.xml',
              'http://www.example.com/feed3.xml');

//create new subscriber
$subscriber = new Publisher($hub);

//publish feeds
$response = $subscriber->publish($feed);

//print response
var_dump($response);
?>