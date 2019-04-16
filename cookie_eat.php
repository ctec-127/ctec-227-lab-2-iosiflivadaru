<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cookie Eat</title>
</head>
<body>
  <?php 

  if (isset($_COOKIE['username'])) {
    echo "<p><strong>Username: </strong>{$_COOKIE['username']}</p>"; 
  }
  if (isset($_COOKIE['firstname'])) {
    echo "<p><strong>Firstname: </strong>{$_COOKIE['firstname']}</p>"; 
  }
  if (isset($_COOKIE['lastname'])) {
    echo "<p><strong>Lastname: </strong>{$_COOKIE['lastname']}</p><br>"; 
  }

  if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $key => $value) {
      echo "<p><strong>".$key . ': </strong>' . $value . '</p>';
    }
  }

  ?>
</body>
</html>