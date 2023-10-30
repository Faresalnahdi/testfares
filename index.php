<?php
session_start();

// Check if the user is not logged in, and redirect to the login page if necessary
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to your login page
    exit();
}

// The rest of your HTML content for authenticated users
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fares Alahdi - CV</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #e5e5e5;
    }

    @media (max-width: 768px) {
      body {
        margin: 10px;
        padding: 10px;
      }
    }

    header {
      text-align: center;
    }

    .headtext {
      margin-top: 60px;
      color: #191919;
    }

    .menu {
      position: fixed;
      top: 0;
      left: 35px;
      width: 23%;
      height: 100vh;
      background: #044856;
      padding: 20px;
      box-sizing: border-box;
    }

    section {
      margin-bottom: 20px;
      margin-left: 22%;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 8px;
    }

    .education,
    .experience {
      color: #e5e5e5;
      margin-bottom: 30px;
    }

    .skills {
      margin-top: 30px;
    }

    footer {
      position: fixed;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
      color: #888;
      padding: 20px;
      width: 100%;
      color: #191919;
    }

    a {
      color: #007BFF;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    /* Modal styling */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      background-color: #fff;
      margin: 10% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      border-radius: 8px;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }

  </style>
</head>
<body>

  <header>
    <div class="headtext">
      <h2>Work Experience</h2>
      <ul>
        <li>Dubai police - Software Development</li>
      </ul>

      <h2>Skills</h2>
      <ul>
        <li>Database Management System (DBMS)</li>
        <li>Data AnalysisData Analysis</li>
        <li>Communication</li>
        <li>Problem Solving</li>
        <li>Creative Strategy</li>
      </ul>
    </div>
  </header>

  <div class="menu">
    <section class="education">
      <h1>Fares Alahdi</h1>
      <p><strong>ITM</strong> - Information Technology Management</p>
      <h2>Education</h2>
      <ul>
        <li><strong>AUE</strong> - Bachelor's in Computer Science</li>
      </ul>
    </section>
  </div>

  <div id="loginModal" class="modal">
    <div class="modal-content">
    
      <form id="loginForm">
        <h2>Login</h2>
        <div class="input-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="button" onclick="login()">Login</button>
      </form>
      <p id="error-message"></p>
    </div>
  </div>

  <footer>
    <p>Contact: mrfaresthabet@gmail.com</p>
  </footer>

</body>
</html>
