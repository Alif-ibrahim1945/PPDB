 <html>
    <title>
login
    </title>
    <body>
            
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class = 'alert'>Username dan password tidak sesuai! </div>";
            }
        }
        ?>
<center>
    <div class="container">
<form action ="cek_login.php" method="post">
    <input class ="log" type="text" name="username" placeholder="username" required><br>
    <input class ="log" type="password" name="password" placeholder="password" required><br>

    <input class="but" type="submit" value="login">
    </form>
    </div>
</center>

    </body>
    <style>
        .but{
  background-color: purple;
  border: none;
  color: white;
  padding : 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
        }
.container {
    display:flex;
    justify-content:center;
    align-items: center;
    height:100vh;
}

.log{
    margin-bottom:10px;
    float:left;    
    
}

form{

    color: rgb(255,255,255);
    background-color: rgba(41, 30, 49, 0.345);
    padding:20px;
    width: 200px;
    margin:0;
    border-radius:10px;
    box-shadow:0 0 10px  rgba(0,0,0,0.1);
}
    </style>
</html>