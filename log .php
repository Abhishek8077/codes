<?php
echo"abc";
session_start();

if(isset($_SESSION['username']))
{
	unset($_SESSION['username']));
session_destroy();
}

header("Location: index.html");
die;

?>