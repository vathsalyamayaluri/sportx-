<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="home.css">

    <style>
       
        .entry_box{
            padding-top: 45px;
        height: 400px;
        width: 400px;
        border: 2px solid black;
        margin: auto;
        margin-top: 15vh;
        border-radius: 10px;
        background-color: #234;
        }
        .field input{
            margin: auto;
            margin-top: 30px;
  height: 100%;
  width: 70%;
  padding-left: 45px;
  font-size: 18px;
  outline: none;
  border: none;
  color: #e0d2d2;
  border: 1px solid rgba(255, 255, 255, 0.438);
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
}

.field input::placeholder{
  color: #e0d2d2a6;
}
.field:nth-child(2){
  margin-top: 20px;
}
.field span{
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: #ffffff;
  top: 30px;
  left: 75px;
}

button,.btn_login{
    margin-left: 15%;
  width: 70%;
  height: 50px;
  color: rgb(238, 226, 226);
  font-size: 18px;
  font-weight: 600;
  border: 2px solid rgba(255, 255, 255, 0.438);
  border-radius: 8px;
  background: rgba(105, 105, 105, 0);
  margin-top: 60px;
  outline: none;
  cursor: pointer;
  border-radius: 8px;
}
.btn_login{
  margin-top: 9px;
}
 .field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}
p, p a{
  color:#fff;
  font-sixe:20px;
}
p a:hover{
  text-decoration:underline;
}
    </style>
</head>
<body>

    <section class="sub-header">
        <nav>
            <h1 class="tit">SportX</h1>
            </nav>
    </section>
    <div class="entry_box">

        <h1 align="center" style="color: white;">Enter Admin Login Details:</h1>

      
<form action="RB_Admin_page.html" method="post" name="myForm">
  
    <div class="field">
  
      <span class="fa fa-user"></span>
      <input type="text" placeholder="Email Id" required name="emial">
  
    </div>
  
    <div class="field">
      <span class="fa fa-lock"></span>
      <input type="password" placeholder="Password" name="password" required>
    </div>
  <button type="submit" onclick="chech_it()">Log in</button>
    
  </form>
  <p align="center">or</p>
  <p align="center"><a href="Entry_page.html">Enter as User</a></p>

    </div>

    <script>
    
    </script>

   
    
</body>
</html>