<?php
    for($i=0;$i<=2;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            echo"*";
        }
        echo"\r</br>";
    }
    echo"\r</br>";
    for($i=3;$i>0;$i--)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo"$j";
        }
        echo"\r</br>";
    }
    echo"\r</br>";
    $char='A';
    for($i=0;$i<=2;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
            echo"$char";
            $char++;
        }
        echo"\r</br>";
    }
?>