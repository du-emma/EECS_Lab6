<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <h1>EECS 348 Lab Seven Practice Four</h1>

    <form method="POST">
        <p>Size of the multiplication table: <input type="text" name="tableSize" value=""></p>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the size from the input
        $tableSize = intval($_POST['tableSize']);

        // Check if the size is a valid number
        if ($tableSize < 1) {
            echo "<p>Please enter a valid number greater than 0.</p>";
        } else {
            // Create a table
            echo "<table>";
            echo "<tr><td></td>"; // Empty top-left cell
            for ($columnHeader = 1; $columnHeader <= $tableSize; $columnHeader++) {
                echo "<td>$columnHeader</td>";
            }
            echo "</tr>";

            // Generate table rows
            for ($rowHeader = 1; $rowHeader <= $tableSize; $rowHeader++) {
                echo "<tr>";
                echo "<td>$rowHeader</td>"; // Row header
                for ($columnValue = 1; $columnValue <= $tableSize; $columnValue++) {
                    echo "<td>" . ($rowHeader * $columnValue) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>


