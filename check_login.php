
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Status</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  <?php
  session_start();
  require_once 'connect.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  $alert_message = '';
  $alert_icon = '';
  $redirect_page = '';

  if (empty($username) || empty($password)) {
    $alert_message = 'กรุณากรอก username หรือ password';
    $alert_icon = 'warning';
    $redirect_page = 'login.php';
  } else {
    $stmt = $conn->prepare   ("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($result && $result->num_rows > 0) {
      $alert_message = 'ยินดีต้อนรับเข้าสู่ระบบ';
      $alert_icon = 'success';
      $_SESSION['username'] = $row['username'];
      $_SESSION['fullname'] = $row['fullname'];
      $redirect_page = 'dist/';
    } else {
      $alert_message = 'username or password invalid';
      $alert_icon = 'error';
      $redirect_page = 'login.php';
    }
    $stmt->close();
  }
  ?>
  <script>
    swal({
      title: '<?php echo $alert_message; ?>',
      icon: '<?php echo $alert_icon; ?>',
      button: 'OK',
    }).then(function() {
      window.location = '<?php echo $redirect_page; ?>';
    });
  </script>
</body>

</html>
