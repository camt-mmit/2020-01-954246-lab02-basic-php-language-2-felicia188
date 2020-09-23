<?php
printf("input number(number）: "); 
fscanf(STDIN,"%d",$number); /*输入数字n，作为矩阵边长*/
for($i=1;$i<=$number;$i++)  /*i为矩阵的行，j为列*/
{
    for($j=1;$j<=$number;$j++)    /*i和j组成n层矩阵*/
    {
        if($i+$j<=$number)        /*条件，行加列小于等于矩阵边长n，输出空格；其余输出*；*/
        {echo" ";}
        else if($i+$j>$number)
        {echo"*"; }       
    }
echo "\n";
}

