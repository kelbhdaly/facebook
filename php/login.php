<?php
if ($_POST['username']=="khaled" and $_POST[password]=='123456')
{
    header('location: index.html');
}
else {
    header('location: error.html')
}
?>