<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if((!isset ($_SESSION['nome']) == true))
{
    header('location:index.php');
    die();
}
?>
