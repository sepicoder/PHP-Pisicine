#!/usr/bin/php
<?php
    $file = fopen("/var/run/utmpx", "r");
    while ($utmpx = fread($file, 628)){
        $data = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $utmpx);
        $array[$data['c']] = $data;
    }
    
    ksort($array);
    date_default_timezone_set("Europe/Paris");
    // print_r($array);
    // var_dump($array);
    foreach ($array as $user){
        if ($user['e'] == 7)
        {
            echo trim($user['a']);
            echo "  ";
            echo trim($user['c']);
            echo "  ";
            // echo trim($user['id']);
            $time = date("M d H:i", $user['f1']);
			echo $time . " \n";
        }
    }
    ?>