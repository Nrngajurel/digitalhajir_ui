<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins','Roboto', sans-serif;
        }
        .shadow{
            box-shadow: 0px 0px 10px rgba(0,0,0,0.15);
        }
        .page-container {
            width: 100%;
            height: 100vh;
            background: linear-gradient(to right, #0099ff, #0066ff);
        }
        .auth-container {
            width: 400px;
            height: 400px;
            background: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 10px;
        }
        #login {
            padding-top: 10px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            height: 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 0 15px;
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
        }
        .btn {
            padding: 10px 30px;
            border: 0;
            border-radius: 5px;
            background: #ccc;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-primary {
            background: #0303dd;
        }
        .tabs {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .tab {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            color: #333;
            cursor: pointer;
            font-size: 16px;
        }
        .tab.active {
            background: #0303dd;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="page-container">

        <div class="auth-container shadow">
            <div class="logo">
                <h2>Hajir Kapi</h2>
            </div>
            <div class="tabs">
                <div class="tab active">
                    Login
                </div>
                <div class="tab">
                    Register
                </div>
            </div>
            <div>
                <form id="login" method="post">
                    <input autocomplete="username" type="text" name="username" placeholder="Username">
                    <input autocomplete="current-password" type="password" name="password" placeholder="Password">
                    <input class="btn btn-primary" type="submit" value="Login">
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            // handle form submit
            document.querySelector('#login').addEventListener('submit', function(e){
                e.preventDefault();
            });
        });
    </script>
    
</body>
</html>