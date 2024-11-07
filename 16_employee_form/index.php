<html>

<body>
    <form action="" method="post">
        <label>Enter the name of the employee:</label>
        <input type="text" name="name" required>
        <br />
        <label>Enter the date of joining:</label>
        <input type="date" name="date" required>
        <br />
        <label>Enter the salary of the employee:</label>
        <input type="number" name="salary" required>
        <br />
        <input type="submit" value="Create Employee">
    </form>
    <?php
    include("connectDb.php");
    if (isset($_POST['name']) && isset($_POST['salary']) && isset($_POST['date'])) {
        $name = $_POST['name'];
        $date = $_POST['date'];
        $salary = $_POST['salary'];

        $query = "INSERT INTO `employees` (`id`, `name`, `date`, `salary`) VALUES (NULL, '$name', '$date', '$salary')";
        mysqli_query($conn, $query);

        echo "Employee Added Successfully";
        echo "<br/>";
        echo "Name of the employee is $name";
        echo "<br/>";
        echo "Date of joining the company is $date";
        echo "<br/>";
        echo "Salary of the employee is $salary";
    }
    ?>

    <a href="/programs/17_employee_details/index.php">View All Employee Details</a>
</body>

</html>