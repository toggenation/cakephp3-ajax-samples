<?php 
use Cake\Utility\Xml;

$posts = $this->Posts->fix_array($all_posts->toArray(), $elements); 

$xml = Xml::fromArray([ 'response' =>  [ 'posts' => $posts ] ]);

echo $xml->asXML();



