<html>

<body>
    <form action="" method="post">
        <label>Enter name of the person:</label>
        <input type="text" name="name" required>
        <br />
        <label>Destination:</label>
        <input type="text" name="destination" required>
        <br />
        <label>Date:</label>
        <input type="date" name="date" required>
        <br />
        <label>Enter the price of the tour:</label>
        <input type="number" name="price" required>
        <br />
        <input type="submit" value="Add Tour">
    </form>
    <?php
    include("connectDb.php");
    if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['destination']) && isset($_POST['date'])) {
        $name = $_POST['name'];
        $destination = $_POST['destination'];
        $date = $_POST['date'];
        $price = $_POST['price'];
        $query = "INSERT INTO `tours` (`id`, `name`, `destination`, `date`, `price`) VALUES (NULL, '$name', '$destination', '$date', '$price')";
        mysqli_query($conn, $query);

        echo "Tour Added Successfully";
        echo "<br/>";
    }
    ?>
    <a href="/programs/15_tour_travel/toursTable.php">View All Tours</a>
</body>

</html>