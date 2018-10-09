<?php

function calculoMes($mes){
    
    switch ($mes) {
    	case 'Janeiro':
    		return '01';
    		break;
    	case 'Fevereiro':
    		return '02';
    		break;
    	case 'Marco':
    		return '03';
    		break;
    	case 'Abril':
    		return '04';
    		break;
    	case 'Maio':
    		return '05';
    		break;
    	case 'Junho':
    		return '06';
    		break;
    	case 'Julho':
    		return '07';
    		break;
    	case 'Agosto':
    		return '08';
    		break;
    	case 'Setembro':
    		return '09';
    		break;
    	case 'Outubro':
    		return '10';
    		break;
    	case 'Novembro':
    		return '11';
    		break;		
    	case 'Dezembro':
    		return '12';
    		break;

    	default:
    		return '0';
    		break;
    }
}


?>