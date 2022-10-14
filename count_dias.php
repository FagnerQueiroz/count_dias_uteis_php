<?php
$mes = 1;
$dias_uteis=0;
$i=0;
$proximo_ano=2022;
$dias=[];
while($proximo_ano == 2022 ){
if(2022 ==  date('Y',strtotime('2022-01-01 + '.$i.' day')) and 
date('w',strtotime('2022-01-01 + '.$i.' day')) <> 0 and date('w',strtotime('2022-01-01 + '.$i.' day')) <> 6
){
$mes = date('m',strtotime('2022-01-01 + '.$i.' day'));
$dias_uteis++; 
$dias[$mes]++;
}
$mes = date('m',strtotime('2022-01-01 + '.$i.' day'));
$proximo_ano = date('Y',strtotime('2022-01-01 + '.$i.' day'));
$i++;
}

//echo sum(dias);
print_r($dias);
echo '<br>';
echo array_sum($dias);
?>
