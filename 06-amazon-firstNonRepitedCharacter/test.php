<?php
function solution($s) {
    
    $foundLetter = [];
    for($lt = 0; $lt < strlen($s); $lt++){
        $character =  $s[$lt];
        if(!isset($foundLetter[$character])){
            $foundLetter[$character] = 1;
        }else{
            $foundLetter[$character]++;
        }
    }
    
    for($i = 3; $i < strlen($s); $i ++){
        $character = $s[$i];
        
        if($foundLetter[$character] == 1){
            return $character;
        }
    }

    return "_";
    
}

var_dump(solution("abacabad"));