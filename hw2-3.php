<?php
printf("input number(number）: "); 
fscanf(STDIN,"%d",$number); /*输入数字*/
for($i=0;$i<=$number;$i++)  /*累加变量i小于等于输入数字*/
{
    for($j=0;$j<$i;$j++)    /*累加变量j小于变量i*/
    {
    echo"*";               
    }
echo "\n";
}
/*i=0，j=0，无，换行；
i=1，j=0，*，换行；
i=2，j=0、1，**，换行；
i=3，j=0、1、2，***，换行；
......*/


