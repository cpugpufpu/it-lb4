<?php include "start-session-util.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LB4</title>
</head>
<body>
    <div>
        <h2>Names:</h2>
        <?php echo "Session: " . ($_SESSION['name'] ?? "NEMA"); ?>
        <?php echo "Cookie: " . ($_COOKIE['name'] ?? "NEMA"); ?>
        <form action="index.php" method="get">
            <input type="text" name="name">
            <br/>
            <button type="submit">
                Submit
            </button>
        </form>
    </div>
</body>
</html>
