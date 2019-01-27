<?php

/**
 * Calculator-class
 * 
 * Add as many calculatormethods as you need. This one contains 1 method for calculating annual compounding interest with savings.
 */

class Calculator{

    public function interestPerAnno($principal, $interest, $years,$additionalYearlySavings){

        $total = $principal;
        $interest = $interest/100;
        $resultArray =array();
        
        for ($i=0; $i < $years ; $i++) { 
            
            $int = $interest*$total;
            $total = $total*(1+$interest);
            
            $total += $additionalYearlySavings;
            $newArray = [
                'year' => $i+1,
                'interest' => round($int,2),
                'total' => round($total,2)
            ];
            array_push($resultArray, $newArray);  
            
        }

        return $resultArray;

    }
}


?>