<?php

$dia_inicial=date("d"); //Dia corrente
$dia_final=date("d")+7; //Quajntidade de dias

$mes_inicial=date("m"); //Mês corrente
$mes_final=date("m")+1; //Pegando o próximo mês

if($mes_final=="13"){ $mes_final="01"; } //Ao trocar o ano

$num_dias=date("t"); //Números de dias

if($num_dias<$dia_final){ //Corrigindo o mês com a soma dos dias úteis
$subtracao=$dia_final-$num_dias;
$dia_final=$subtracao;
if(strlen($dia_final)==1){ $dia_final="0".$dia_final; }
$data_final=$mes_final."-".$dia_final;
$valor=1;
}else{
$data_final=$mes_inicial."-".$dia_final;
$valor=0;
}

$data_inicial=$mes_inicial."-".$dia_inicial;

echo $data_final;

