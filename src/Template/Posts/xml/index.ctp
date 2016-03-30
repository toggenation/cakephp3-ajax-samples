<?php 
use Cake\Utility\Xml;

$posts = $this->Posts->fix_array($posts->toArray()); 


$xml = Xml::fromArray([ 'response' =>  [ 'posts' => $posts ] ]);

echo $xml->asXML();
