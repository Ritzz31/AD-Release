<?php
session_start();

include 'connection.php';

$id =$_GET["Ad_id"];
$userid = $_SESSION["userid"];

$result = $con->query("select * from table_ad where Ad_id='$id'");
$row = $result->fetch_object();

$_SESSION["Ad_id"] = $id;
$_SESSION["Title"] = $row->Title;
$_SESSION["Size"] = $row->Size;
$_SESSION["Price"] = $row->Price;
$_SESSION["ad_page"] = $row->ad_page;
$_SESSION["logo"] = $row->logo;
$_SESSION["Agency_id"] = $row->Agency_id;


header('location: cart.php');



?>