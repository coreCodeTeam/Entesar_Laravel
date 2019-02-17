
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <style>
    
        body{
            margin: 0;
            padding: 0;
            background: url(1.jpg);
            background-size: cover;
            font-family: sans-serif;
        }
        main{
            width: 360px;
            height: 460px;
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
            width: 110px;
            height: 110px;
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
            font-size: 25px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        p{
            margin: 0;
            padding: 0;
            font-weight: bold;
            font-size: 17px;
        }
        input{
            width: 100%;
            margin-bottom: 15px;
        }
        input[type="text"],input[type="password"],input[type="email"]{
            border: none;
            border-bottom: 1px solid;
            background: transparent;
            outline: nonr;
            height: 40px;
            font-size: 15px;
        }
        input[type="submit"]{
            border: none;
            outline: none;
            height: 40px;
            background: #000033;
            color: white;
            font-size: 17px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            font-size: 14px;
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
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <p>Username</p>
            <input id=" email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter Username or email" required autofocus />
            @if ($errors->has('email'))
                                    <span >
                                        <strong style="font-size:12px; color:red;">{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
            <p>Password</p>
            <input id="password" type="password" name="password" placeholder="Enter Password" required/>
            @if ($errors->has('password'))
                                    <span>
                                        <strong style="font-size:12px; color:red;">{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
            <input type="submit" value="Login" />
                                                          
            @if (Route::has('password.request'))
             <a href="{{ route('password.request') }}">Lost your password?</a>
            @endif 
            <br />
            <a href="{{ route('register') }}">Don't have an account?</a>
        </form>
    </main>
</body>
</html>


