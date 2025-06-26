<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <form method="POST" action="/register">
        @csrf
        <input name="name" placeholder="Name">
        <input name="email" type="email" placeholder="Email">
        <input name="password" type="password" placeholder="Password">
        <input name="password_confirmation" type="password" placeholder="Confirm Password">
        <button type="submit">Register</button>
    </form>
    
</body>
</html>