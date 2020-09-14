<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="stylespro.css">
    
</head>
<body>
        <div class="inner">
            <div class="photo">
                <img src="image/eduu.svg" alt="quizman">
            </div>
            <div class="user-form">
                <h2>Register Here to start with Brainstorming Quizzes</h2>
                <form  action="welcome.php" method="post">
                    <i class="fas fa-user icon"></i> 
                    <input type="text" placeholder="Name">
                    <br>
                    <i class="fas fa-envelope icon"></i> 
                    <input type="email" placeholder="E-mail">
                    <br>
                    <i class="fas fa-lock icon"></i> 
                    <input type="password" placeholder="Password">
    
                    <i class="fas fa-lock-alt icon"></i> 
                    <input type="password" placeholder="Confirm Password">
                    <div class="safety">
                        <span>Password strength</span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                    
                    <div class="action-btn">
                        <button class="btn primary">Create Account</button>
                        
                    </div>
                </form>
            </div>
        </div>
</body>
</html>