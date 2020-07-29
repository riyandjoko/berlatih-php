<?php

function palindrome_angka($angka){

    $hasil='';
    $strAngka = strval($angka);
    $reversedString = '';
    for ($a = strlen($strAngka)-1; $a>=0; $a--){
        $reversedString .=$strAngka[$a];
    }

    if ($reversedString == $strAngka) {
        $angka +=1;

    }

    while (true) {
        $strAngka = strval($angka);
        $reversedString = '';
        for ($a = strlen(strAngka)-1; $a>=0; $a--){
            $reversedString .= $strAngka[$a];
        }
        if ($reversedString == $strAngka) {
            global $hasil;
            $hasil = $strAngka .'<br>';
            return $hasil;
        }else {
            $angka +=1;
        }
    }
}
// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001


?>