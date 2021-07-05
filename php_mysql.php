<?php
$connection = new mysqli("localhost","root","e+-@MNZNNNckyy8PCgTAq+rTXp]zx}");

$connection->query("CREATE DATABASE IF NOT EXISTS internship");

mysqli_select_db($connection,"internship");

$connection->query("CREATE TABLE IF NOT EXISTS users(ID INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), NAME VARCHAR(50) NOT NULL, PHONE_NUMBER VARCHAR(20) NOT NULL UNIQUE)");

