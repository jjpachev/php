<?php
function count_words($text)
{
    $output = $words = array();
    preg_match_all("/[A-Za-z'-]+ /", $text, $words); 

    foreach ($words[0] as $word)
    {
        if (!array_key_exists($word, $output))
            $output[$word] = 0;

        $output[$word]++; 
    }

        
    return $output;
}

$text =  file_get_contents('morman13.txt');



$tst_funct = count_words($text);


foreach ($tst_funct as $key => $value)
{
echo $key . $value . " \n ";
}
    
?>