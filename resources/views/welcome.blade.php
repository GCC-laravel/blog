<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Welcome to Laravel
    {{ route('dashboard.users.get') }}
    @if(true) 
    <b>It is true</b>
    @foreach(['<h1>a</h1>','<h2>b</h2>'] as $val)
        {{ $val }}
    @endforeach
    @else 
    <b>It is false</b>
    @endif    
</body>
</html>