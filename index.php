<!-- // Purpose: To demonstrate the use of PHP in a web page -->

<!DOCTYPE html>
<html>
<head>
  <title>Hello World</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id="form">
    <div class="container">
      <div class="inputs">
        <label for="username">Username</label>
        <input type="text" placeholder="username">
      </div>
      <div class="inputs">
        <label for="password">Password</label>
        <input type="password" placeholder="password">
      </div>
      <div class="inputs">
        <label for="age">Age</label>
        <input type="number" placeholder="age">
      </div>
      <div class="inputs">
        <label for="city">City</label>
        <input type="text" placeholder="city">
      </div>
      <button class="submit">submit</button>

      <div class="input-result">

        <p>Username:</p>
        <p>Password: </p>
        <p>Age: </p>
        <p>City: </p>
      </div>
    </div>
  </div>
  <?php
      //  <!-- grab the value from the inputs and add them after user clicks on the button -->
      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        echo "<div class='input-result'>
        <p>Username: $username</p>
        <p>Password: $password</p>
        <p>Age: $age</p>
        <p>City: $city</p>
        </div>";
      }
  ?>

</body>
</html>
