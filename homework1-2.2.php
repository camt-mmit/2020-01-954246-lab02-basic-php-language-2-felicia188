<?php
/*ID:602110188
name:Chen Shuo 
wechart:felicia*/
printf("input data(number1 number2）: "); 
    fscanf(STDIN,"%d %d",$number1,$number2);
    switch($number1){
        case $number1>$number2:
        printf("%d greater than %d",$number1,$number2);break;
        case $number1<$number2:
        printf("%d lesser than %d",$number1,$number2);break;
        case $number1=$number2:
        printf("%d equal to %d",$number1,$number2);break;}