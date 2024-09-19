<?php
//sessions and cookies

//sessions
session_start();

$_SESSION['name'] = 'John Doe';
$_SESSION['age'] = 25;

echo $_SESSION['name'];

// session_unset(); - to destroy session

?>