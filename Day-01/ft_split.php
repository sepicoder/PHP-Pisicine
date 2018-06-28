#!/usr/bin/php
<?php  
	function ft_split($str)
	{
        $word = explode(' ', $str);
        if ($str != NULL)
            sort($word);
        return $word;
    }
?>