<!DOCTYPE html>
<html>
<style>
    body {
        display: flex;
        justify-content: center
    }


    table,
    tr,
    td,
    th {
        border: 1px black solid;
        border-collapse: collapse;
        text-align: left;
        padding: 10px;
    }

    table {
        width: 60%;

    }
</style>

<body>

    <?php
    $vahicles = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );

    echo "<table>";
    echo "<tr>
        <th>Model</th>
        <th>Stock</th>
        <th>Serial</th>
     </tr>";

    foreach ($vahicles as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>" . $cell . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";

    ?>

</body>

</html>