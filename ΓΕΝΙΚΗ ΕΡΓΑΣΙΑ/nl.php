<?php
$var1=15;
function addit(){
static $var1;
$var1++;
}
echo "somerar is $var1";
?>