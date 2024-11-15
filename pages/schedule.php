<?php
require_once '../php/init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="css/schedule.css">
  <script src="https://kit.fontawesome.com/d781878796.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="login-form">
            <?php addSchedMsg(); ?>
            <h2>Set Schedule</h2>
            <form method="post">
                <input type="time" placeholder="Insert Schedule" name="schedule" required>
                <div class="btn"><button type="submit" name='submit'>Set</button></div>
                 <!-- <input type="submit" name="submit" value="Set"> -->
            </form>
        </div>
    </div>
    
</body>
</html>