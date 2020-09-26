<?php
$connection = mysqli_connect("localhost","root","","my_project");
global $connection;
if($connection)
{
    // echo "success";
}
else
{
    echo "error";
}

?>