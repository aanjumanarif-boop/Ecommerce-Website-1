<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login Form</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#f2f2f2;
        }

        .login-box{
            width:350px;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
        }

        .login-box h2{
            text-align:center;
            margin-bottom:25px;
            color:#333;
        }

        .input-box{
            margin-bottom:20px;
        }

        .input-box label{
            display:block;
            margin-bottom:5px;
            color:#555;
        }

        .input-box input{
            width:100%;
            padding:12px;
            border:1px solid #ccc;
            border-radius:5px;
            outline:none;
        }

        .input-box input:focus{
            border-color:#007bff;
        }

        .login-btn{
            width:100%;
            padding:12px;
            border:none;
            background:#007bff;
            color:#fff;
            font-size:16px;
            border-radius:5px;
            cursor:pointer;
        }

        .login-btn:hover{
            background:#0056b3;
        }

        .bottom-text{
            text-align:center;
            margin-top:15px;
            font-size:14px;
        }

        .bottom-text a{
            color:#007bff;
            text-decoration:none;
        }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Customer Login</h2>

        <form method="POST" action="{{url('/customer/login/auth')}}">
            @csrf
            <div class="input-box">
                <label>Email</label>
                <input type="email" placeholder=" email" name="email" id="email" required>
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" placeholder=" password" name="password" required>
            </div>

            <button type="submit" class="login-btn">
                Login
            </button>

            <div class="bottom-text">
                Don't have an account?
                <a href="#">Create Account</a>
            </div>
        </form>
    </div>

</body>
</html>