<?php

// Define the size of the chessboard
$size = 8;

// Loop through rows
for ($row = 1; $row <= $size; $row++) {
    // Loop through columns
    for ($col = 1; $col <= $size; $col++) {
        // Determine the color of the square
        $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
        
        // Output the square
        echo "<div style='background-color: $color; width: 50px; height: 50px; display: inline-block;'></div>";
    }
    echo "<br>"; // Move to the next row
}

?>