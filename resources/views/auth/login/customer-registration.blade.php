<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration Form</title>

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

        .register-box{
            width:400px;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,0.1);
        }

        .register-box h2{
            text-align:center;
            margin-bottom:25px;
            color:#333;
        }

        .input-box{
            margin-bottom:18px;
        }

        .input-box label{
            display:block;
            margin-bottom:5px;
            color:#555;
            font-size:14px;
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

        .register-btn{
            width:100%;
            padding:12px;
            border:none;
            background:#007bff;
            color:#fff;
            font-size:16px;
            border-radius:5px;
            cursor:pointer;
        }

        .register-btn:hover{
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

    <div class="register-box">
        <h2>Customer Registration</h2>

        <form method="POST" action="{{url('/customer/registration-store')}}" enctype="multipart/form-data">
            
            @csrf

            <div class="input-box">
                <label> Name</label>
                <input type="text" 
                       name="name" 
                       placeholder="Enter your name" 
                       required>
            </div>

            <div class="input-box">
                <label>Phone Number</label>
                <input type="text" 
                       name="phone" 
                       placeholder="Enter phone number" 
                       required>
            </div>

            <div class="input-box">
                <label>Email</label>
                <input type="email" 
                       name="email" 
                       placeholder="Enter email address" 
                       required>
            </div>

            <div class="input-box">
                <label>Password</label>
                <input type="password" 
                       name="password" 
                       placeholder="Enter password" 
                       required>
            </div>

            <div class="input-box">
                <label>Image (Optional)</label>
                <input type="file" 
                       name="image">
            </div>

            <button type="submit" class="register-btn">
                Registration
            </button>

            <div class="bottom-text">
                Already have an account?
                <a href="{{url('/customer/login')}}">Login</a>
            </div>

            <div class="bottom-text">
                <a href="{{url('/')}}">Home</a>
            </div>

        </form>
    </div>

</body>
</html>