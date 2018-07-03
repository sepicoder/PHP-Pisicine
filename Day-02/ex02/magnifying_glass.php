#!/usr/bin/php
<?php
    if ($argc >= 2)
    $string = file_get_contents($argv[1]);


	$string = preg_replace_callback('/title="(.*?)"/', 
    function ($matches) {
    return  'title="' . strtoupper($matches[1]) .'"';  
}, $string);
$string = preg_replace_callback('/<a [^>]+.*<\/a>/si',
    function ($matches) 
    {
        return preg_replace_callback('/>.*</si', function ($matches) {
            return strtoupper($matches[0]);
        }, $matches[0]);
}, $string);
echo $string;
?>