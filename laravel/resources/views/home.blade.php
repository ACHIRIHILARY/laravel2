<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        .auth-section,
        .register-section,
        .login-section {
            background: #fff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #555;
        }
    </style>
    </head>

    <body>
        <div class="container">
            @auth
                <div class="auth-section">
                    <h1>Congratulations, you are logged in as {{ auth()->user()->name }}</h1>
                    <form action="logout" method="post">
                        @csrf
                        <button>Logout</button>
                    </form>
                </div>

                <form action="create-post" method="post">

                    @csrf
                    <input type="text" name="title" placeholder="Enter post title">
                    <textarea name="content" placeholder="Enter post content"></textarea>
                    <button type="submit">create-post</button>
                </form>
            @else
                <div class="register-section">
                    <h1>Registration page</h1>
                    <form action="register" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="Enter your name">
                        <input type="text" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit">Register</button>
                    </form>
                </div>

                <div class="login-section">
                    <h1>Login page</h1>
                    <form action="login" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="Enter your name">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit">Login</button>
                    </form>
                </div>
            @endauth
        </div>
    </body>

</html>