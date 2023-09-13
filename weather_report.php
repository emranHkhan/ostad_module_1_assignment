<?php

$temperature = readline("Enter a temperature value: ");

if ($temperature <= 10) {
    echo "It's freezing.";
} else if ($temperature > 10 && $temperature <= 20) {
    echo "It's cool.";
} else {
    echo "It's warm.";
}
