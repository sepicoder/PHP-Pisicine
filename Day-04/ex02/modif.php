<?php
if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"] || $_POST["submit"] != "OK")
{
    echo "ERROR\n";
    return ;
}
$authentication = array(
    "login"	=> $_POST['login'],
    "oldpw"	=> hash("whirlpool", $_POST['oldpw']),
    "newpw"	=> hash("whirlpool", $_POST['newpw']),
);
$account = unserialize(file_get_contents("../private/passwd"));
foreach($account as $elem => $key)
    if ($key["login"] === $authentication["login"] &&
        $key["passwd"] === $authentication["oldpw"])
    {
        $account[$elem]["passwd"] = $authentication["newpw"];
        file_put_contents("../private/passwd", serialize($account));
        echo "OK\n";
        return ;
    }
echo "ERROR\n";
?>