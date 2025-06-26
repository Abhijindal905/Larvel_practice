<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        {{-- {{ dd($user )}} --}}
        <h1>Welcome, {{ $user->name }}</h1>
        <h2>Your Email is {{ $user->email }}</h2>
    </div>
</body>
</html>