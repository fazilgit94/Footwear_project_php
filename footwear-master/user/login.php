<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register_page</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #23242a;
    
}
.box{
    position: relative;
    width: 380px;
    height: 420px;
    background-color: #1c1c1c;
    border-radius: 8px;
    overflow: hidden;
}
.box::before{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent,#45f3ff,#45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
}
.box::after{
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 380px;
    height: 420px;
    background: linear-gradient(0deg, transparent,#45f3ff,#45f3ff);
    transform-origin: bottom right;
    animation: animate 6s linear infinite;
    animation-delay: -3s;
}
@keyframes animate {
    0%{
        transform: rotate(0deg);
    }
    100%{
        transform: rotate(360deg);
    }
}

/* Form */
.form{
    position: absolute;
    inset: 2px;
    border-radius: 8px;
    background: #28292d;
    z-index: 10;
    padding: 50px 40px;
    display: flex;
    flex-direction: column;
}
.form h2{
    color: #45f3ff;
    font-weight: 500;
    text-align: center;
    letter-spacing: 0.1em;
}
.inputBox{
    position: relative;
    width: 100%;
    margin-top: 35px;
}

.inputBox input{
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    border: none;
    outline: none;
    color: #23242a;
    font-size: 1em;
    letter-spacing: 0.05em;
    z-index: 10;
}
.inputBox span{
    position: absolute;
    left: 0;
    padding: 20px 0px 10px;
    font-size: 1em;
    color: #8f8f8f;
    pointer-events: none;
    letter-spacing: 0.05em;
    transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span{
    color: #45f3ff;
    transform: translateX(0px) translateY(-34px);
    font-size: 0.75em;
}
.inputBox i{
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background: #45f3ff;
    border-radius: 4px;
    transition: 0.5s;
    pointer-events: none;
    z-index: 0;
}
.inputBox input:valid ~ i,
.inputBox input:focus ~ i{
     height: 44px;
}

.links{
    display: flex;
    justify-content: space-between;

}

.links a {
    margin: 10px 0;
    font-size: 0.75em;
    color: #8f8f8f;
    text-decoration: none;
}
.links a:hover,
.links a:nth-child(2){
    color: #45f3ff;
}

input[type="submit"]{
    border: none;
    outline: none;
    background: #45f3ff;
    padding: 11px 25px;
    width: 100px;
    margin-top: 10px;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
} 
input[type="submit"]:active{
    opacity: 0.8;
}
</style>
<body>
    <form action="" method="POST">
    <div class="box">
        <div class="form">
            <h2>SIGN IN</h2>
            <div class="inputBox">
                <input type="text" name="uname" required>
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="pass" required>
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#" style="font-size: larger;">Forget password</a>
                <a href="/MVC/footwear-master/user/register" style="font-size: larger;">Signup</a>
            </div>
            <!-- <input type="submit" value="" name="log"> -->
            <button type="submit" name="log">login</button>

        </div>
    </div>
    </form>
</body>
</html>
</body>
</html>