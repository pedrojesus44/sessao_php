<?php
session_start();
/*session is stared if you don't write this line can't use $_Session global variable*/
$_SESSION["newsession"]=$vaue;
/*session created*/
echo $_SESSION["newsession"];
/*session was getting*/
?>