<?php
session_start();

unset($_SESSION["Ad_id"]);
unset($_SESSION["Title"]);
unset($_SESSION["Size"]);
unset($_SESSION["Price"]); 
unset($_SESSION["ad_page"]);
unset($_SESSION["logo"]);
unset($_SESSION["description"]);
unset($_SESSION["filename"]);


header('location: postad.php');



?>