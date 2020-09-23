<?php
/*ID:602110188
name:Chen Shuo 
wechart:felicia*/
printf("input Unit range(number）: "); 
    fscanf(STDIN, "%d",$number);
    switch($number){
        case $number==0:
            printf("price of electricity bill = 0");break;
        case $number<=5 && $number>=1 :
            printf("price of electricity bill = 10");break;
        case $number<=10 && $number>=6:
            
            printf("price of electricity bill = %d",$price = 10+3*($number-5));break;
        case $number<=15 && $number>=11:
           
            printf("price of electricity bill = %d",$price = 25+5*($number-10));break;
        case $number>=16:
          
            printf("price of electricity bill = %d",$price = 50+10*($number-15));break;
        }
   