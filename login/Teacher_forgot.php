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
      background-color: #F11A7B;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }


    a{ 
      text-decoration:none;
      color:white;
    }
  </style>
</style>
<div class="login-container">
    <h2> Retrieve Teacher Password
</h2>
    <form onsubmit="return handleLogin(event)">
      <input type="text" placeholder="Id" id="Username">
      <input type="password" placeholder="Password" id="password">
  
 <br><br>

<input class="mg sp" type="submit" value="Login">
</div>