<?php
if($_GET["action"] === "set")
    setcookie($_GET["name"], $_GET["value"], time() + 3600);//create a cookie - set time in one hour
elseif($_GET["action"] === "get")
{
    if ($_COOKIE[$_GET['name']])
    echo ($_COOKIE[$_GET["name"]]."\n");//read a cookie
}
elseif($_GET["action"] === "del")
    setcookie($_GET["name"], "", time() - 3600);//delete a cookie - set time one hour ago 
?>