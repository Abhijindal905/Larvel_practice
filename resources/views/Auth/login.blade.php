<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/login">
        @csrf
        <input name="email" type="email" placeholder="Email">
        <input name="password" type="password" placeholder="Password">
        <button type="submit">Login</button>

        @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p style="color:red">{{ $error }}</p>
    @endforeach
@endif
    </form>
</body>
</html>