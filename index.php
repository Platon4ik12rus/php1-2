<?php

$pus1 = readline("Введитк пароль: ");
$pus2 = readline("Введитк повтор пароля: ");

if ($pus1 === $pus2) {
    echo "Пароль совпадает";
} else {
    echo "Пароли не совпадают";
}
