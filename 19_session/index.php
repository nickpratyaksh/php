<?php
session_start();

if (isset($_POST["user_name"])) {
    $_SESSION["user_name"] = $_POST["user_name"];
}

if (isset($_SESSION["user_name"])) {
    echo "Session Started" . "<br/>";
    echo "User Name: " . $_SESSION["user_name"];
} else {
    echo "Session Not Started";
    echo "<form action='index.php' method='post'>";
    echo "<input type='text' name='user_name' placeholder='Enter User Name'/>";
    echo "<input type='submit' value='Submit'/>";
    echo "</form>";
}
