<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-900">
    <div class="text-white m-auto flex flex-col justify-center items-center min-h-screen">

    {{ $slot }}

    </div>
    
</body>
</html>