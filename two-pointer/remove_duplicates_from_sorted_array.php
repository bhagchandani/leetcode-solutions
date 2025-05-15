<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        
        $looptill = count(array_count_values($nums));
        $unique = [];
        $ununiquer = [];

        for($i =0;$i < count($nums); $i++){
            if(!in_array($nums[$i],$unique)){
                $unique[] = $nums[$i];
            }else{
                $ununiquer[] = $nums[$i];
            }
        }
        $nums = array_merge($unique,$ununiquer);
        
        return $looptill;
    }
}
