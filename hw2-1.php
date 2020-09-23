<?php
/*ID:602110188
name:Chen Shuo 
wechart:felicia*/
do{
printf("input menu(number）: "); 
fscanf(STDIN,"%d",$number);
    switch($number)
    {
        case 1:
            printf("input number(price %%discount）: ");
            fscanf(STDIN,"%d %d",$price,$discount);
            $discount_cost = $price*$discount*0.01;
            $netprice = $price-$discount_cost;
            printf("price %.2f discount %.2f net price is: %.2f\n",$price,$discount,$netprice);
            break;

        case 2:
            printf("input data(number1 number2）: "); 
            fscanf(STDIN,"%d %d",$number1,$number2);
            switch($number1){
            case $number1>$number2:
            printf("%d greater than %d\n",$number1,$number2);break;
            case $number1<$number2:
            printf("%d lesser than %d\n",$number1,$number2);break;
            case $number1=$number2:
            printf("%d equal to %d\n",$number1,$number2);break;}
           
            break;
        case 3:
            exit;
    }  
if($number>=4)
{echo"Invalid menu number!!!\n";}

}while($number!=3);
        
   
    


