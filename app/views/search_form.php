<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Station - Search Trains</title>
</head>
<body>

    <h1>Search for Trains</h1>

    <form method="GET" action="index.php">
        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" required>
        <br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        <br><br>

        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_GET['destination']) && isset($_GET['date'])) {
        $destination = $_GET['destination'];
        $date = $_GET['date'];

        if (empty($destination) || empty($date)) {
            echo "<p>Please enter search criteria.</p>";
        } else {
            echo "<p>Searching for trains to " . htmlspecialchars($destination) . " on " . htmlspecialchars($date) . "...</p>";
        }
    }
    ?>

</body>
</html>