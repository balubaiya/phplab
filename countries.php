<?php
$countries = ["Nepal", "China", "Germany", "Australia", "India"];
echo "List of countries:<br>";

for ($i = 0; $i < count($countries); $i++) {
    echo ($i + 1) . ". " . $countries[$i] . "<br>";
}
?>
