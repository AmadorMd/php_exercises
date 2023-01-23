<?php 
function solution($s1, $s2) {
    $occurrences1 = array();
    $occurrences2 = array();
    for ($i = 0; $i < strlen($s1); $i++) {
        $char = $s1[$i];
        if (!isset($occurrences1[$char])) {
            $occurrences1[$char] = 1;
        } else {
            $occurrences1[$char]++;
        }
    }
    for ($i = 0; $i < strlen($s2); $i++) {
        $char = $s2[$i];
        if (!isset($occurrences2[$char])) {
            $occurrences2[$char] = 1;
        } else {
            $occurrences2[$char]++;
        }
    }
    $result = "";
    $i = 0;
    $j = 0;
    while ($i < strlen($s1) && $j < strlen($s2)) {
        if ($occurrences1[$s1[$i]] < $occurrences2[$s2[$j]] || ($occurrences1[$s1[$i]] == $occurrences2[$s2[$j]] && ord($s1[$i]) < ord($s2[$j]))) {
            $result .= $s1[$i];
            $i++;
        } else {
            $result .= $s2[$j];
            $j++;
        }
    }
    while ($i < strlen($s1)) {
        $result .= $s1[$i];
        $i++;
    }
    while ($j < strlen($s2)) {
        $result .= $s2[$j];
        $j++;
    }
    return $result;
}
$s1 = "ougtaleegvrabhugzyx";
$s2 = "wvieaqgaegbxg";
var_dump(solution($s1, $s2));

//owvieaqugtaleegvrabhugzyxgaegbxg