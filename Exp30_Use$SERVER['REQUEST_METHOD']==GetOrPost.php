<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Self-Processing Form</title>
</head>
<body>
     <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          // Process the form data
          $name = htmlspecialchars($_POST['name']);
          $email = htmlspecialchars($_POST['email']);
          
          echo "<h2>Form Submitted</h2>";
          echo "<p>Name: $name</p>";
          echo "<p>Email: $email</p>";
     } else {
          // Display the form
     ?>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required><br><br>
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br><br>
          
          <input type="submit" value="Submit">
     </form>
     <?php
     }
     ?>
</body>
</html>
