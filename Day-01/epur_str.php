#!/usr/bin/php
<?PHP
if ($argc == 2)
{
	$str = trim($argv[1]);
	while ((strpos($str, "  ")) == TRUE)
		$str = str_replace("  ", " ", $str);
	echo("$str\n");
}
?>