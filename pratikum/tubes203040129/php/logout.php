<?php
session_start();
session_destroy();
header("Location: ../index.php");
die;
<style>
        body{
            background-color:  gray; 
        }
    </style>
?>