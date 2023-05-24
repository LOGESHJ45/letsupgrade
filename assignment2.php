//to get the multiplication table for a given number
<?php
$size = 20; // Define the size of the multiplication table

function multiply($num){
echo "<table border='2'>";

// Generate table rows
for ($i = 1; $i <= 20; $i++) {
    echo "<tr>";
        $result = $i * $num;
        echo "<td>$i x $num = $result</td>";
    
    echo "</tr>";
}

echo "</table>";}
multiply(7);
?>
