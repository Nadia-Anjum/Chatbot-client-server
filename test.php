<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="backendtest.php"> Backend test</a>

    <form action="backendtest.php" method="GET">
        <label for="number1">Number 1:</label>
        <input type="number" id="number1" name="number1" required><br><br>


        <label for="number2">Number 2:</label>
        <input type="number" id="number2" name="number2" required><br><br>


        <input type="submit" value="Submit">
    </form>


    <?php
    if (isset($_GET['sum'])) {
        $sum = $_GET['sum'];
        echo "<p>Sum: $sum</p>";
    }
    ?>


    <!-- exercise - html table with arrays  -->
    <table border="1">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Major</th>
        </tr>

        <tr>
            <td>
                <?php
                // Create an array with 5 values
                $student = [
                    "Maria",
                    "Paulsen",
                    24,
                    "Female",
                    "Computer Science"
                ];

                // Loop through the array and print each value
                foreach ($student as $student) {
                    echo "<p>$student</p>";
                }
                ?>

            </td>
            <td>
                <?php
                // Create an array with 5 values
                $student = [
                    "Maria",
                    "Paulsen",
                    24,
                    "Female",
                    "Computer Science"
                ];

                // Loop through the array and print each value
                foreach ($student as $student) {
                    echo "<p>$student</p>";
                }
                ?>

            </td>
            <td>
                <?php
                // Create an array with 5 values
                $student = [
                    "Maria",
                    "Paulsen",
                    24,
                    "Female",
                    "Computer Science"
                ];

                // Loop through the array and print each value
                foreach ($student as $student) {
                    echo "<p>$student</p>";
                }
                ?>

            </td>
            <td>
                <?php
                // Create an array with 5 values
                $student = [
                    "Maria",
                    "Paulsen",
                    24,
                    "Female",
                    "Computer Science"
                ];

                // Loop through the array and print each value
                foreach ($student as $student) {
                    echo "<p>$student</p>";
                }
                ?>

            </td>
            <td>
                <?php
                // Create an array with 5 values
                $student = [
                    "Maria",
                    "Paulsen",
                    24,
                    "Female",
                    "Computer Science"
                ];

                // Loop through the array and print each value
                foreach ($student as $student) {
                    echo "<p>$student</p>";
                }
                ?>

            </td>
        </tr>

    </table>

    <?php
    $student = [
        "Maria",
        "Paulsen",
        24,
        "Female",
        "Computer Science"
    ];

    ?>



    <?php
    // loop - exercise
    for ($i = 0; $i <= 100; $i++) {
        echo $i;

        if ($i < 100) {
            echo ", ";
        } else {
            echo "<br>";
        }
    }

    // example with arrays - names
    $myArray = array("Sarah", "Marcus", "Nikoline", "Amalie");

    // a foreach loop that prints each value in the array
    foreach ($myArray as $value) {
        echo $value . "<br>";
    }

    ?>

</body>

</html>