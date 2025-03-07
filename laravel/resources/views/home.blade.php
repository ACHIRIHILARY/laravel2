<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <div style="border: 3px solid black" class="">

        <h1>Registration page</h1>
        <form action="register" method="post">
            @csrf
            <input type="text" name="name" placeholder="Enter your name"><br><br>
            <input type="text" name="email" placeholder="email"><br>
            <br>
            <input type="password" name="password" placeholder="password"><br><br>
            <button type="submit">
                Register
            </button>
        </form>
    </div>
</body>

</html>