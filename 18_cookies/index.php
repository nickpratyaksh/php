<?php

setcookie("user_name", "Nick", time() + 3600);

echo "Cookie Set" . "<br/>";
echo "Cookie Value: " . $_COOKIE["user_name"];
