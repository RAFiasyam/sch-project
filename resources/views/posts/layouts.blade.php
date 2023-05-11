<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smile</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-white flex flex-col">
        <a href="javascript:history.go(-1)"><img class="absolute top-0 left-0" src="{{ asset('svg/back.svg') }}" alt="back"></a>
        <a href="{{ route('posts.create') }}"><img class="absolute top-0 left-[70px]" src="{{ asset('svg/add.svg') }}" alt="back"></a>
    </div>
</body>
</html>