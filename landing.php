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
  <title>Login</title>
  <link rel="stylesheet" href="/HobbiesCSS/landing.css" />
</head>

<body>
  <div class="landingMain">
    <div class="ali_logo">
      <img src="/assets/landingLeng.png" />
    </div>
    <div class="log-in">
      <?php
      if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
          if (password_verify($password, $user["password"])) {
            session_start();
            $_SESSION["user"] = "yes";
            header("Location: mainApp.php");
            die();
          } else {
            $errormessage = "Password does not match!";
          }
        } else {
          $errormessage = "Username does not match";
        }
      }
      ?>
      <form class="form" method="post" action="landing.php">
        <div class="Group">
          <input id="username" type="text" name="username" placeholder="username" required>
        </div>
        <div class="Group">
          <input id="password" type="password" name="password" placeholder="password" required>
        </div>
        <div class="Group">
          <button class="btn" value="Login" name="login">log in</button>
        </div>
        <a class="btn2" href="register.php">not registered? sign-up</a>
        <div class="error" id="error"></div>
      </form>
      <script>
        var message = "<?= $errormessage ?>";
        document.getElementById('error').textContent = message;
      </script>
    </div> <!-- sign-up closing tag-->
  </div> <!-- landing main closing tag -->
</body>

</html>