<?php 
if (isset($_GET['submit'])) 
{
    if (isset($_GET['gender'])) 
    {  
        $gender = $_GET['gender'];
        if (empty($gender)) {
            echo "Invalid Gender: Empty Field";
        } else {
            echo "Valid Gender: " . $gender;
        }
    }
}
?>
