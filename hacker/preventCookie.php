<?php

$date = new DateTime("+1 week");

$secret = password_hash("123123",PASSWORD_BCRYPT);

setcookie("key",$secret,$date->getTimestamp(),'/',null,null,true);

//echo $_COOKIE['key'];





?>