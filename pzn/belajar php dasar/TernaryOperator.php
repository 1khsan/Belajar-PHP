<?php

$gender = "PRIA";

$hi = null;

if ($gender == "PRIA"){
    $hi = "Hai Bro!";
} else {
    $hi = "Hi nona!";
}

$hai = ($gender == "PRIA") ? "Hi bro" : "Hi Nona!";
echo $hai;