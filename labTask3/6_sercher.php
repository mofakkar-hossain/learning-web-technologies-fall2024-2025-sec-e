<?php
    $arr=array(1,2,3,4,5,6,7,8,9,10);
    $key=9;
    $flag=false;
    for($i=0;$i<10;$i++)
    {
        if($arr[$i]==$key)
        {
            $flag=true;
            break;
        }
    }
    if($flag)
    {
        echo"Element found";
    } 
    else
    {
        echo"Element not found";
    }
?>