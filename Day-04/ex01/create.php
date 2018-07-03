<?php
if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] == "OK") //ERROR CHECK
{

if (!file_exists("../private")) //DIRECTORY EXISTENCE || LOGIN EXISTENC        
        mkdir ("../private");
    if (!file_exists("../private/passwd"))
        file_put_contents("../private/passwd", null);
    if(file_exists("../private/passwd"))
    {
        $authentication = unserialize(file_get_contents("../private/passwd"));
        $error = 0;
        foreach ($authentication as $key => $value)
            {
                if($value['login'] === $_POST['login'])      
                    $error = 1;    
            }
                if ($error == 1)
            echo "ERROR\n";
        else  
        {
            $stock["login"] = $_POST["login"];
            $stock["passwd"] = hash('whirlpool', $_POST["passwd"]);
            $authentication[] = $stock;
            $authentication = serialize($authentication);
            file_put_contents("../private/passwd", $authentication);
            echo "OK\n";
        }
    }
}
        else 
            echo "ERROR\n";
?>