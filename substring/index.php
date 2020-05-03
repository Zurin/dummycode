<?php 
    include("count.php"); 
    $sub = new SubstringCount();

    $str = "charmander";
    $count = $sub->countSubstr($str);
    echo $count;
?>