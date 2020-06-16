<?php
    $quotes[] = "quote 1";
    $quotes[] = "quote 2";
    $quotes[] = "quote 3";
    $quotes[] = "quote 4";
    $quotes[] = "quote 5";
    $quotes[] = "quote 6";

    srand ((double) microtime() * 1000000);
    $randomquote = rand(0,count($quotes)-1);
    echo "<p>" . $quotes[$randomquote] . "</p>";
    ?> 