<?php
    $age = 19;
    if($age > 17)
        goto voter;
        echo "Non voter";
        return;

        voter:
        echo "Voter";
?>