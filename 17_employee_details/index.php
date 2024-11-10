<html>

<body>
    <a href="/programs/16_employee_form/index.php">Add Employee</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Date of joining</th>
            <th>Salary</th>
        </tr>

        <?php
        include("connectDb.php");
        $query = "SELECT * FROM `employees`";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["salary"] . "</td>";
                echo "<td><a href='deleteEmployee.php?id=" . $row["id"] . "'>Delete</a></td>";
                echo "<td><a href='editEmployee.php?id=" . $row["id"] . "'>Edit</a></td>";
                echo "</tr>";
            }
            echo "</tr>";
        }

        ?>
    </table>
</body>

</html>