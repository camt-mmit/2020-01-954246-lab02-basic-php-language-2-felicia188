<?php
printf("input menu(number）: "); 
fscanf(STDIN,"%d",$number);
for($j=1;$j<=12;$j++) /*控制行*/
{
   for($i=2;$i<=$number;$i++) /*控制列*/
   {
   printf("%4d ",$n=$j*$i);
   }
   echo"\n";
} 

?>