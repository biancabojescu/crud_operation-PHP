<?php
const HOSTNAME = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "crud_operation";

$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if(!$connection){
    die("Connection Failed!");
}