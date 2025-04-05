<?php

for($i=1; $i <= 6; $i++) {
    echo "<h$i>Titulo $i</h$i>";
}
echo "<hr>";

$i = 1;
while ( $i <= 6 ) {
    echo "<h$i>Titulo $i</h$i>";
    $i++;
}
echo "<hr>";

?>