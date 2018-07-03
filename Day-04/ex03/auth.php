<?php
  function auth($login, $passwd)
  {
    $accounts = unserialize(file_get_contents("../private/passwd"));
    foreach ($accounts as $key => $value)
      if ($value[login] == $login && hash(whirlpool, $passwd) == $value[passwd])
        return (true);
    return (false);
  }
?>