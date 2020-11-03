<?php
$muuttuja = 6097;
if($muuttuja>4000){
echo "A";}
elseif($muuttuja==0 || $muuttuja==1000){
echo "B";}
elseif($muuttuja%2==0 ||$muuttuja<3000){
echo "C";}
else{
echo "D";}