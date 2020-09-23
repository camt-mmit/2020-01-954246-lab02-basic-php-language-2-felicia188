<?php
/*ID:602110188
name:Chen Shuo 
wechart:felicia*/
$d=0;
while($d!=10)
{
  $d+=1;
  printf("Input number $d: "); 
  fscanf(STDIN,"%f",$number);
  $arr[]=$number;
}
$max=max($arr);
printf("The maximum number is %.2f",$max);  