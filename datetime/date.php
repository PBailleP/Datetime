<?php

$presentTime = new DateTime;

$destinationTime = (new DateTime)->setDate(2022,11,15)->setTime(10, 10, 00);

$diffTime = $presentTime->diff($destinationTime);

echo "Present : " . $presentTime->format('M d Y A h i') . "\n";

echo "Destination : " . $destinationTime->format('M d Y A h i') . "\n";

echo "Intervalle  : " . $diffTime->y .'années '. $diffTime->m .'mois '. $diffTime->d .'jours '. $diffTime->h .'heures '. $diffTime->i .'minutes ';