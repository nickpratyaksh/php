<!DOCTYPE html>
<html>

<body>
    <?php
    include("connectDb.php");

    // Get the employee ID from the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Fetch employee details for the given ID
        $query = "SELECT * FROM `employees` WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $employee = mysqli_fetch_assoc($result);
            $name = $employee['name'];
            $date = $employee['date'];
            $salary = $employee['salary'];
        } else {
            echo "Employee not found.";
            exit;
        }
    } else {
        echo "No employee ID provided.";
        exit;
    }

    // Check if the form is submitted for updating
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['name']) && isset($_POST['salary']) && isset($_POST['date'])) {
            $name = $_POST['name'];
            $date = $_POST['date'];
            $salary = $_POST['salary'];

            // Update the employee details in the database
            $updateQuery = "UPDATE `employees` SET `name` = '$name', `date` = '$date', `salary` = '$salary' WHERE `id` = '$id'";
            if (mysqli_query($conn, $updateQuery)) {
                echo "Employee Updated Successfully";
                echo "<br/>";
            } else {
                echo "Error updating employee: " . mysqli_error($conn);
            }
        }
    }
    ?>

    <form action="" method="post">
        <label>Enter the name of the employee:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
        <br />
        <label>Enter the date of joining the company:</label>
        <input type="date" name="date" value="<?php echo htmlspecialchars($date); ?>" required>
        <br />
        <label>Enter the salary of the employee:</label>
        <input type="number" name="salary" value="<?php echo htmlspecialchars($salary); ?>" required>
        <br />
        <input type="submit" value="Update Employee">
    </form>

    <a href="/programs/17_employee_details/index.php">View All Employee Details</a>
</body>

</html>