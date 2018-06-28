#!/usr/bin/php
<?php
if ($argc > 1)
{
    $exploded = explode(' ', $argv[1]);
	$filtered = array_filter($exploded);
    foreach (array_slice($filtered, 1) as $word)
    {
        echo "$word"." ";
    }
    echo "$filtered[0]"."\n";
}
?>