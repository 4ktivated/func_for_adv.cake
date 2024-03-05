<?php
$string = "Hello, World! This is a Test.";


function reverse_words(string $string)
 {

    $str_arr = explode(" ", $string);
    for ( $i=0; $i<count($str_arr); $i++ )
    {   
        $word = $str_arr[$i];
        if(!ctype_alpha($str_arr[$i][-1]))
        {
            $word = substr($word, 0, -1);
            if ($word[0] == strtoupper($word[0]) )
    {
        $word =  ucfirst(strtolower(strrev($word)));
    }
        $str_arr[$i] =$word.$str_arr[$i][-1];
        }else
        {
            $str_arr[$i] = strrev($word);
        }
    }
    $result = implode(" ", $str_arr);
    return $result;
}



function test_reverse_words()
{
    $string = "Hello, World! This is a Test.";
    $expected = "Olleh, Dlrow! sihT si a Tset.";
    $result = reverse_words($string);
    if ($result == $expected) {
        echo "Test passed";
    } else {
        echo "Test failed";
    }
}

test_reverse_words();
