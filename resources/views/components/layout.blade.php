<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#FFECD6] min-h-screen flex flex-col justify-between">
{{--HEADER--}}
<x-header></x-header>
{{$slot}}

{{--footer--}}
<x-footer></x-footer>
</body>
</html>
