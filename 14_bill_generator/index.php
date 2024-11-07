<html>

<body>
    <?php
    $items = array(array("name" => "Pen", "price" => 10), array("name" => "Pencil", "price" => 5), array("name" => "Eraser", "price" => 15));
    ?>
    <form action="" method="post">
        <label>Select item</label>
        <select name="item">
            <?php
            foreach ($items as $i => $item) {
                echo "<option value=" . $i . ">" . $item['name'] . "</option>";
            }
            ?>
        </select>
        <br />
        <label>Enter quantity</label>
        <input type="number" name="quantity" required>
        <br />
        <label>Enter your name </label>
        <input type="text" name="name" required>
        <br />
        <input type="submit" value="Generate Bill">
    </form>
    <?php
    if (isset($_POST['item'])) {
        $item = $items[$_POST['item']]['name'];
        $price = $items[$_POST['item']]['price'];
        $quantity = $_POST['quantity'];
        $name = $_POST['name'];
        echo "<h1>Bill generated for $name</h1>";
        echo "<h2>Item: $item</h2>";
        echo "<h2>Quantity: $quantity</h2>";
        echo "<h2>Total Price: ₹" . $price * $quantity . "</h2>";
    }
    ?>
</body>

</html>

<!-- <table border="1">
        <tr>
            <th>Sno.</th>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php
        // $i = 1;
        // foreach ($items as $item) {
        //     echo "<tr>";
        //     echo "<td>$i</td>";
        //     echo "<td>" . $item['name'] . "</td>";
        //     echo "<td>" . $item['price'] . "</td>";
        //     echo "</tr>";
        //     $i++;
        // }
        ?>

    </table> -->