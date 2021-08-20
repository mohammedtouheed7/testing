<?php
$date = date('d m Y');
$dt =(explode(" ",$date)); 
$y =$dt[2];
$m =$dt[1];
if($m <=3)
echo "First Quarter";
else if(($m >=4) && ($m<=6))
echo "Second Quarter";
else if(($m>7) && ($m<=9))
echo "Third Quarter";
else if(($m>10) && ($m<=12))
echo "Last Quarter";
?>