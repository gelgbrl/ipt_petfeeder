<?php
require_once './php/init.php';

$con = new config();
$con->con();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pet Food Bowl Tracker</title>
  <link rel="stylesheet" href="css/home.css">
  <script src="https://kit.fontawesome.com/d781878796.js" crossorigin="anonymous"></script>
</head>
<body>
  <header class="navbar">
    <div class="logo">LOGO</div>
    <nav>
      <a href="#home" title="Home" class="_home"><i class="fa-solid fa-house"></i></a>
      <a href="#" title="Schedules" class="_sched"><i class="fa-solid fa-calendar-days"></i></a>
      <a href="#" title="User" class="_user"><i class="fa-solid fa-user"></i></a>
      <a href="./pages/login.php" title="Sign Out" class="_out"><i class="fa-solid fa-right-from-bracket"></i></a>
    </nav>
  </header>

  <div class="container" id="home">
    <aside class="profile">
      <img src="https://i.imgur.com/dsV7lvm.png" alt="Pet Profile Picture" referrerpolicy="no-referrer" class="profile-pic">
      <div class="username">@username</div>
      <div class="info">
        <div class="info-item">
          <img src="https://i.imgur.com/R6vqiW0.png" referrerpolicy="no-referrer" alt="Food Icon">
          <p>Food Content: </p><span>2.3kg</span>
        </div>
        <div class="info-item">
          <img src="https://i.imgur.com/KWUXt4Q.png" referrerpolicy="no-referrer" alt="Schedule Icon">
          <p>Next Schedule: </p><span>6:30 AM</span>
        </div>
        <div class="info-item">
          <img src="https://i.imgur.com/nHRDa3O.png" referrerpolicy="no-referrer" alt="Timer Icon">
          <p>Time Remaining: </p><span>500hrs</span>
        </div>
      </div>
    </aside>
  
    <main class="logs" id="logs">
      <h2>Feed Log</h2>
      <div class="log-list">
        <div class="log-item">
          <div class="log-top">
            <p class="log-date">November 01, 2024 • 9:50 PM</p>
            <p>✖</p>
          </div>
          <hr>
          <p>Your pet has eaten food from the bowl.</p>
          <p>Bowl Status: 2.3kg</p>
        </div>
        <div class="log-item">
          <div class="log-top">
            <p class="log-date">November 01, 2024 • 9:50 PM</p>
            <p>✖</p>
          </div>
          <hr>
          <p>Your pet has eaten food from the bowl.</p>
          <p>Bowl Status: 3.1kg</p>
        </div>
        <div class="log-item">
          <div class="log-top">
            <p class="log-date">November 01, 2024 • 9:50 PM</p>
            <p>✖</p>
          </div>
          <hr>
          <p>Device Activated. Food bowl has been filled with food.</p>
          <p>Bowl Status: 4.0kg</p>
        </div>
        <div class="log-item">
          <div class="log-top">
            <p class="log-date">November 01, 2024 • 9:50 PM</p>
            <p>✖</p>
          </div>
          <hr>
          <p>Device Activated. Food bowl has been filled with food.</p>
          <p>Bowl Status: 4.0kg</p>
        </div>
        <div class="log-item">
          <div class="log-top">
            <p class="log-date">November 01, 2024 • 9:50 PM</p>
            <p>✖</p>
          </div>
          <hr>
          <p>Device Activated. Food bowl has been filled with food.</p>
          <p>Bowl Status: 4.0kg</p>
        </div>
        <div class="log-item">
          <div class="log-top">
            <p class="log-date">November 01, 2024 • 9:50 PM</p>
            <p>✖</p>
          </div>
          <hr>
          <p>Device Activated. Food bowl has been filled with food.</p>
          <p>Bowl Status: 4.0kg</p>
        </div>
      </div>
    </main>
  </div>
  <div class="add">
    <p><a href="./pages/schedule.php" target="__blank">+</a></p>
     <!-- <input class="btn" type="submit" value="+"> -->
  </div>
</body>
</html>
