<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "orders";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "products";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}