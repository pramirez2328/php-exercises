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
        <input type="text" name='username' placeholder="username">
      </div>
      <div class="inputs">
        <label for="password">Password</label>
        <input type="password" name='password' placeholder="password">
      </div>
      <div class="inputs">
        <label for="age">Age</label>
        <input type="number" name='age' placeholder="age">
      </div>
      <div class="inputs">
        <label for="city">City</label>
        <input type="text" name='city' placeholder="city">
      </div>
      <button class="submit">submit</button>

      <div class="input-result">


      </div>
    </div>
  </div>
   <script>
  document.querySelector('.submit').addEventListener('click', function(event) {
    event.preventDefault();

    let username = document.querySelector('input[name="username"]').value;
    let password = document.querySelector('input[name="password"]').value;
    let age = document.querySelector('input[name="age"]').value;
    let city = document.querySelector('input[name="city"]').value;

    document.querySelector('.input-result').innerHTML = `
      <p>Username: ${username}</p>
      <p>Password: ${password}</p>
      <p>Age: ${age}</p>
      <p>City: ${city}</p>
    `;
  });
</script>

</body>
</html>
