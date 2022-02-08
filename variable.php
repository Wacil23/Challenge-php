<?php
    $bookName = 'Voyage avec un ane dans les Cévennes';
    $read = TRUE;
    $releaseBook = 1879;
    $price = 6;
    echo "$bookName<br />";
    if ($read == TRUE) {
        echo "Je l'ai lu<br />";
    }
    else {
        echo "Pas lu<br />";
    }
    echo "$releaseBook<br />";
    echo "$price";