<?php
/*ID:602110188
name:Chen Shuo 
wechart:felicia*/
printf("input data(price %%discount）: "); /*函数输出格式化的字符(输入数据（价格，折扣）)，%%返回一个百分号（表示程序已经自带百分号，输入时无需添加%）*/
fscanf(STDIN,"%d %d",$price,$discount); /*根据指定格式打开文件的输入进行解析(从stdin中读取数字)，%d 带符号的十进位数，*/
$discount_cost = $price*$discount*0.01; /*注意，0.01的作用代替输入折扣的百分号*/
$netprice = $price-$discount_cost;
printf("price %.2f discount %.2f net price is: %.2f\n",$price,$discount,$netprice); /*%.2f截取两位小数；print（字符，变量1，变量2），变量1使用第一个%形式，以此类推*/