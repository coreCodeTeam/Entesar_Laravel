<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>work1</title>
    <style>
    
        body{
            margin: 0;
            padding: 0;
            background: url(1.jpg);
            background-size: cover;
            font-family: sans-serif;
        }
        main{
            width: 320px;
            height: 420px;
            background: white;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px;
            border-radius: 5%;
            border: 2px solid black;
            box-shadow:0px 0px 40px crimson ;
        }
        .acer{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
            box-shadow:0px -5px 10px crimson ;
        }
        h1{
            margin: 0;
            padding: 0;
            text-align: center;
            font-size: 22px;
            margin-bottom: 10px;
        }
        p{
            margin: 0;
            padding: 0;
            font-weight: bold;
            font-size: 14px;
        }
        input{
            width: 100%;
            margin-bottom: 15px;
        }
        input[type="text"],input[type="password"]{
            border: none;
            border-bottom: 1px solid;
            background: transparent;
            outline: nonr;
            height: 40px;
            font-size: 12px;
        }
        input[type="submit"]{
            border: none;
            outline: none;
            height: 40px;
            background: #000033;
            color: white;
            font-size: 15px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            font-size: 12px;
            line-height: 20px;
            color: darkgray;
        }
        input[type="text"],input[type="password"]{
            outline: none;
        }
        input[type="submit"]:hover{
            background-color: red;
        }
    
    </style>
</head>
<body>
    <main>
        <img src="2.jpg" alt="acer" class="acer" />
        <h1>Login</h1>
        <form>
            <p>Username</p>
            <input type="text" name="" placeholder="Enter Username" />
            <p>Password</p>
            <input type="password" name="" placeholder="Enter Password" />
            <input type="submit" value="Login" />
            <a href="#">Lost your password?</a>  <br />
            <a href="#">Don't have an account?</a>
        </form>
    </main>
</body>
</html>