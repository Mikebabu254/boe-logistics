<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION["email"]) || ($_SESSION["email"] == "admin@mail.com")) {
  header("Location: admin_dashboard.php");
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agent Details</title>
  <link rel="stylesheet" href="styles/agent_dashboard.css">
</head>
<body>
    
    <nav>
      <img src="images/icons.jpg">
      <ul>
          <li><a href="#" id="dashboard">Dashboard</a></li>
          <li><a href="#" id="account">Account</a></li>
          <li><a href="#" id="sent">Sent</a></li>
          <li><a href="#" id="inventory">Inventory</a></li>
          <li><a href="logout.php">Logout</a></li>
      </ul>
  </nav>

    <div class="frm">
        <iframe src="dashboard.php" id="dashFrame" class="frmStyle"></iframe>
        <iframe src="account.php" id="accountFrame" class="frmStyle"></iframe>
        <iframe src="sent.php" id="sentFrame" class="frmStyle"></iframe>
        <iframe src="inventory.php" id="inventoryFrame" class="frmStyle"></iframe>
    </div>

  <script src="js file/scipt.js"></script>
</body>
</html>
