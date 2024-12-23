<?php
require_once("../model/userModel.php");
$username = trim($_POST["username"]);

if(isset($_POST['submit']))
{
    if(delete($username))
    {
        header("location: ../view/home.php");
    }
}
header(header: "location: ../view/home.php" )

?>