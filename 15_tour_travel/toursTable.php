<html>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Price</th>
        </tr>
        <?php
        include("connectDb.php");
        $query = "SELECT * FROM `tours`";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["destination"] . "</td>";
                echo "<td>" . $row["date"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "</tr>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>