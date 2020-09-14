<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
   <link rel="stylesheet" href='/css/auth.css'>
</head>
<body>
        <div class="inner">
            <div class="photo">
                <img src="/images/fellow.jpeg" alt="quizman">
            </div>
            <div class="user-form">
                <h1>Welcome to Brain Maze!</h1>
                <form  action="welcome.php" method="post" >
                    <i class="fas fa-envelope icon"></i> 
                    <input type="email" placeholder="E-mail">
                    <br>
                    <i class="fas fa-lock icon"></i> 
                    <input type="password" placeholder="Password">
                    <div class="lin">
                    
                        <p align="center"><a href="">Forgot Password?</a></p>  
                    </div>
                   
                   
                    <div class="action-btn">
                      
                        <button class="btnn" >Sign In</button>
                       
                    </div>

                    <div class="lin">
                        <p align="center">Don't have an account yet? <a href="">SignUp</a></p>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>