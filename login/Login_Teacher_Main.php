<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      text-align: center;
      margin-top: 100px;
    }

    .login-container {
      max-width: 300px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
      display:flex;
      flex-direction:column;
      gap:5px;
    }
     .mg{
      margin-bottom:12px;
}
 .sp{
  margin-right:30px;
 }
.left{
margin-left:0px;
}
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

    input[type="submit"], .btn {
      background-color: #4caf50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: poi;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
    a{ 
      text-decoration:none;
      color:white;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Teacher Login</h2>
    <form onsubmit="return handleLogin(event)">
      <input type="text" placeholder="Id" id="Username" >
      <input type="password" placeholder="Password" id="password" >
 


<input class="mg sp" type="submit" value="Login">
      
       
    <button  class="btn" "> <a href="Teacher_Registration.php">New User </a></button>


      
    <button  class="btn" value="Forget Password"> <a href="Teacher_forgot.php">Forget Password</a></button>
      <!-- <form action="Login.php" method="post"> -->
    <button  class="btn" value="Student Login"> <a href="login_Main.php">Student Login</a></button>
     
    </form>
  </div>

  <script>
    function handleLogin(event) {
      event.preventDefault();

      // Get the input values
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;

      // Add your login logic here (e.g., sending a request to the server for authentication)

      // For this example, we'll just display an alert based on the credentials
      if (username === 'exampleuser' && password === 'examplepassword') {
        alert('Login successful!');
      } else {
        alert('Invalid credentials. Please try again.');
      }

      // Clear the input fields
      document.getElementById('username').value = '';
      document.getElementById('password').value = '';
    }
  </script>
</body>
</html>