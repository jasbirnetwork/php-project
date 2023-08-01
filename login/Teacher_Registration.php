 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        input { 
  text-decoration: none;
  width: 50%;
  padding: 12px 20px;
  /* margin: 8px 0; */
  margin: auto;
  margin-left: 25%;

  box-sizing: border-box;
  
}
.container{margin:0 auto; 
    
    /* margin-left: 30%; */
    width:50vw;
    height: 100vh; 

}
form{
    margin:0 auto;

}
/* chrome k liye controller hatane k liye */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
h2{
    text-align: center;
}
.btn{
    background-color:green;
    color: #ffff;
}
    </style>
</head>
<body>

<div class="container">


<form action=".php"> 
  
<h2>New Teacher registration</h2>
<input type="text" id="Name" placeholder="Name" name="Name"  ><br> <br> 
  <input type="text" id="Course" placeholder="Course"  name="Course" ><br><br>
  
  <input type="number"  id="Contact" placeholder="Contact"  name="Contact"  ><br><br>

  <input type="varchar" id="Email" placeholder="Email" name="Email"  ><br><br> 
   

  <input type="text" id="ID" placeholder="Teacher Id" name="ID"  ><br> <br> 
  <input type="Password" id="Password" placeholder="Password"  name="Password"  ><br><br>

  <input class="btn" type="submit" value="Submit">
</form> 

</div>
    
</body>
</html>

 