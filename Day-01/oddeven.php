#!/usr/bin/php
<?php
while(1)
{
echo "Enter a number:";

$number = fgets(STDIN);
$number = trim($number);
if (feof(STDIN))
{
    echo "\n";
    exit();
}
if(is_numeric($number))
{
    if ($number % 2 == 0)
        echo ("The number ".$number." is even.\n");
    else
        echo ("The number ".$number." is odd.\n");
}
else
    echo ("'".$number ."'"." is not a number.\n");
}
?>