<html>

<body>
    <div style="display:inline-grid;grid-template-columns: repeat(8,1fr);">
        <?php
        for ($i = 1; $i <= 8; $i++) {
            for ($j = 1; $j <= 8; $j++) {
                if (($i + $j) % 2 == 0) {
                    echo "<div style='background-color:white;height:50px; width: 50px; border:1px solid black'></div>";
                } else {
                    echo "<div style='background-color:black;height:50px; width: 50px; border:1px solid black'></div>";
                }
            }
        }
        ?>
    </div>
</body>

</html>