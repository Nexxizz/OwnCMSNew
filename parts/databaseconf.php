<?php


$connect = mysqli_connect('localhost', 'CMSNew', '1234ab', 'cmsnew');

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}