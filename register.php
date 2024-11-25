<!--Aliyah Patrice Luntok | 3033 BIT222K-KTA | February 15, 2023-->
<?php
session_start();
if (isset($_SESSION["user"])) {
  header("Location: mainApp.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="/HobbiesCSS/register.css" />
</head>

<body>
  <div class="log-in">
  <?php
  if (isset($_POST["submit"])) {
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($fullName) or empty($email) or empty($password) or empty($username)) {
      array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors, "Email is not valid");
    }
    if (strlen($password) < 8) {
      array_push($errors, "Password must be at least 8 charactes long!");
    }

    require_once "database.php";
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
      array_push($errors, "Email already exists!");
    }
    if (count($errors) > 0) {
      foreach ($errors as  $error) {
        $errormessage = $error;
      }
    } else {

      $sql = "INSERT INTO users (full_name, email, username, password) VALUES ( ?, ?, ?, ? )";
      $stmt = mysqli_stmt_init($conn);
      $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
      if ($prepareStmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $fullName, $email, $username, $passwordHash);
        mysqli_stmt_execute($stmt);
        $errormessage = "You are registered successfully.";
      } else {
        die("Something went wrong");
      }
    }
  }
  ?>
    <form class="form" action="/register.php" method="post">
      <div class="Group">
        <input id="name" type="text" name="fullname" placeholder="Full Name" required>
      </div>

      <div class="Group">
        <input id="email" name="email" type="email" placeholder="Email" required>
      </div>

      <div class="Group">
        <input id="username" name="username" type="text" placeholder="Username" required>
      </div>

      <div class="Group">
        <input id="password" name="password" type="password" placeholder="Password" required>
      </div>

      <div class="group">
        <button class="btn" type="submit" value="Signup" name="submit">Register</button>
      </div>

      <a class="btn2" href="landing.php">Already have an account? login</a>

      <div class="error" id="error"></div>
    </form>
    <script>
            var message = "<?= $errormessage ?>";
            document.getElementById('error').textContent = message;
        </script>
  </div> <!-- sign-up closin tag-->
</body>

</html>