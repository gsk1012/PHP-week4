<?php

// opdracht 1
for ($i = 0; $i <= 50; $i++) {
    echo $i;
}
//

// opdracht 2
$namen = ['naam1', 'naam2', 'naam3', 'naam4', 'naam5', 'naam6', 'naam7', 'naam8', 'naam9', 'naam10'];
foreach ($namen as $naam) {
    echo $naam . PHP_EOL;
}
//

// opdracht 3
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];
for ($i = 0; $i < count($maanden); $i++) {
    echo $maanden[$i] . PHP_EOL;
}
//

// opdracht 4
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];
foreach ($maanden as $maand) {
    echo $maand . PHP_EOL;
}
//

?>