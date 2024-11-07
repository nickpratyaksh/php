<html>

<body>
    <table style="border: 1px solid black;">
        <?php

        $employees = array(
            array("name" => "Aman", "salary" => 10000),
            array("name" => "Amit", "salary" => 12000),
            array("name" => "Amar", "salary" => 15000)
        );

        foreach ($employees as $employee) {
            echo "<tr>
                <th style='border: 2px solid black; color:red'>Salary of {$employee['name']} is </th>
                <th style='border: 2px solid black;'>{$employee['salary']}$</th>
            </tr>";
        }

        ?>
    </table>
</body>

</html>