<?php

include "../classes/User.php";

//Create an object
$user = new User();

//Call the method
$user ->update($_POST,$_FILES);
?>