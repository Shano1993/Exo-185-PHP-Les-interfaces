<?php

require 'classes/user.php';

$user = new user();

echo "Nombres max d'instance: " . UserInterface::MAX_INSTANCES . "<br>";
echo "Nombres max d'instance: " . user::MAX_INSTANCES . "<br>";

$user->parseRequest('Bonsoir');





