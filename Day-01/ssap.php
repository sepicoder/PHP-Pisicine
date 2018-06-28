#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $word = explode(' ', $str);
        if ($str != NULL)
            sort($word);
        return ($word);
    }
    $elem = array();
    foreach($argv as $arg)
    {
        if($arg != $argv[0])
        {
            $word = ft_split($arg);
            $elem = array_merge($elem, $word);
        }
    }
    sort($elem);
    foreach ($elem as $element)
    {
        echo $element ."\n";
    }
?>