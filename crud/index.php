<?php
include("connectDb.php");

$query = "select * from test;";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["name"];
    }
}

if (isset($_POST['name'])) {
    $data = $_POST['name'];
    $query = "INSERT INTO `test` (`id`, `name`) VALUES (NULL, '$data')";
    mysqli_query($conn, $query);
}

?>

<html lang="en">

<body>
    <form action="index.php" method="post">
        <label for="name">Enter Name:</label>
        <input name="name" />
        <input type="submit" />
    </form>
</body>

</html>