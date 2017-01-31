<?php

$feed = simplexml_load_file($_ENV['NEWSFEEDURL']);
//$feed = simplexml_load_file("http://feeds.bbci.co.uk/news/world/rss.xml");
$newsText[] = array();
foreach($feed->channel->item as $newsitem)
{
	array_push($newsText, (string)$newsitem->description);
}
return
 [
	 'greetings' => [
	 	$newsText
	 ]
];
