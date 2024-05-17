<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <body>
        <section class="container">
            <div class="login-container">
                <div class="circle circle-one"></div>
                <div class="form-container">
                    <h1 class="opacity">LOGIN</h1>

                    <form  action ="cek_login.php" method="post">
                        <input type="text" name="username" placeholder="username" required/>
                        <input  type="password" name="password" placeholder="password" required/>
                        <button  class="but" type="submit" value="login">login</button>
                    </form>
                    <div class="register-forget opacity">
                    </div>
                </div>
                <div class="circle circle-two"></div>
            </div>
            <div class="theme-btn-container"></div>
        </section>
    </body>
</body>
</html>