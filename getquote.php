<?php
    $quotes[] = "Seals are part of the pinniped order of marine mammals, which also includes sea lions, walruses and fur seals. There are 33 species of pinnipeds in the world and all are believed to have evolved from once terrestrial otter-like creatures.";
    $quotes[] = "Seals prefer cold sea waters and are primarily found in the Arctic and Antarctic regions.";
    $quotes[] = "In the wild, seals can live for up to 30 years with females boasting a higher life expectancy than males.";
    $quotes[] = "Some seal species, like the Leopard Seal, feed off fellow seals! Most, however, feed off crustaceans, fish and seabirds (if they can catch them).";
    $quotes[] = "The Crabeater Seal, which can be spotted on an Antarctic cruise, boasts the largest population of all the seal species. Estimates put their numbers at between 2 and 75 million. individuals, worldwide. As cute and friendly as they may look, seals can actually be fervently territorial and quite aggressive.";
    $quotes[] = "Seals can sleep underwater and usually only come on land to escape predators like whales and sharks, as well as to mate, give birth, feed and moult.";
    $quotes[] = "Some seals can dive up to 900m in depth and some can hold their breath underwater for up to 2 hours!"
    $quotes[] = "A seal mum’s milk can be up to 50% fat, and pups can put on 2kgs a DAY. That should make you feel a little better about your Christmas and New Year calorific splurge!"
    $quotes[] ="Seals have been hunted throughout history, with their fat and fur being highly coveted. Although a great majority of species are not endangered – the Galapagos Fur Seal is one of the exceptions – seals are still a highly protected mammal in most parts of the world. Ove the last century, various species have gone extinct, including the Caribbean Monk Seal and Japanese Sea Lion."
    srand ((double) microtime() * 1000000);
    $randomquote = rand(0,count($quotes)-1);
    echo "<p>" . $quotes[$randomquote] . "</p>";
    ?> 