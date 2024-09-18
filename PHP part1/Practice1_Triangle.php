<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h2>Calculate the Area of a Triangle</h2>
    <form method="post">
        Side 1: <input type="number" step="0.01" name="side1" required><br>
        Side 2: <input type="number" step="0.01" name="side2" required><br>
        Side 3: <input type="number" step="0.01" name="side3" required><br>
        <input type="submit" value="Calculate Area">
    </form>

    <?php

    if (isset($_POST['side1']) && isset($_POST['side2']) && isset($_POST['side3'])) {
        $side1 = $_POST['side1'];
        $side2 = $_POST['side2'];
        $side3 = $_POST['side3'];
        $s = ($side1 + $side2 + $side3) / 2;
        $area = ($s * ($s - $side1) * ($s - $side2) * ($s - $side3));
        $area = $area ** 0.5;
        $area = number_format($area, 2);
        echo "<p>The area of the triangle is: " . $area . " square units</p>";
    }
    ?>
</body>
</html>
