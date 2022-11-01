<?php

function romanToInt($s) 
{
    // array_chunk() <-> Pega os valores de um array e os junta em strings com o comprimento determinado pelo programador
    // Funções usadas em string geralmente, ou sempre mas não tenho certeza, começam com str
    $array = str_split($s,1); 
    $resultado = 0;
    
    for($i = count($array) - 1; $i >= 0; $i--) // Não é possível usar o comandos strlen para ver o comprimento de array, apenas de strings.
    {
        switch($array[$i])
        {
            case "I":
                $array[$i]= 1;
            break;
                
            case "V":
                $array[$i] = 5;
            break;
            
            case "X":
                $array[$i] = 10;
            break;
                
            case "L":
                $array[$i] = 50;
            break;
                
            case "C":
                $array[$i] = 100;
            break;
                
            case "D":
                $array[$i] = 500;
            break;
                
            case "M":
                $array[$i] = 1000;
            break;
        }
    }
    
    for($i = count($array) - 1; $i >= 0; $i--)
    {
        if($i == count($array) - 1)
        {
            $resultado = $array[$i];
            
        }else if($array[$i] < $array[$i + 1])
        {
            $resultado -= $array[$i];
            
        }else
        {
            $resultado += $array[$i];
        }
    }
    
    return $resultado;
    }

echo romanToInt("IV") . "</br>";
echo romanToInt("MCMXCIV");

?>