<?php

session_start();
if(!$_SESSION['emailL']){
    header("Location: index.php");
    exit();
}

?>