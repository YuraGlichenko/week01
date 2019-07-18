<style>
    table {
        border-color: black;
        margin: 0 auto;
        width: 50%;
    }
    td {
        background-color: maroon;
        color: antiquewhite;
        text-align: left;
    ;
    }
</style>
<?php

echo "<table>";
for ($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    for ($d = 0; $d <= 10; $d++) {
        $res = $i * $d;
        if ($i % 2 == 0 && $d % 2 == 0) {
            echo "<td>$d x $i = (" . $res . ")</td>";
        } elseif ($i % 2 != 0 && $d % 2 != 0)  {
            echo "<td>$d x $i = [" . $res . "]</td>";
        } else {
            echo "<td>$d x $i = " . $res . "</td>";
        }
    }
}
?>