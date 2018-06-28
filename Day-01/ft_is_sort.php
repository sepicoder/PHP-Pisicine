<?php
function ft_is_sort($array)
{
    $tmp = $array;
    sort($tmp);
    foreach ($tmp as $key => $value)
        if ($value !== $array[$key])
            return (false);
    return (true);
}
?>