<HTML>
<body>
<h1>Debug Demo</h1>
<table border="1" width="700">
    <tr style='background-color:red;text-align:center;font-weight: bold; color:white'>
        <td>Name</td>
        <td>Address</td>
        <td>Phone</td>
    </tr>

    <?php
        $db = array(
            array("NGuyen van A", "Paris", "0985589907"),
            array("NGuyen van A", "Paris", "0985589907"),
            array("NGuyen van A", "Paris", "1239213"),
            array("NGuyen van A", "Bejing", "19394004"),
            array("NGuyen van A", "Bangkok", "9254380202"),
        );
        $num = 0;

        foreach ($db as $person){
            if($num % 2 == 1)
                echo "<tr style='background-color:green;color:white'>";
            foreach ($person as $value){
                echo "<td>$value</td>";
            }
            echo "</tr>";
            $num++;
        }
    ?>
</table>
</body>
</HTML>

