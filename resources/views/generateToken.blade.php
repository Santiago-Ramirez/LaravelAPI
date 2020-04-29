<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/ui.css')}}">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>Mostrar Token</title>
</head>
    <body style="color:gray">
        @include('layouts.nav')
        @include('layouts.sid')
    <div class="container" style="margin-left: 250px; margin-top: 100px;">
    <div id="app">
        <generatetoken user="{{ Auth::user() }}"></generatetoken>

    </div>
    </div>
</body>
<script src="{{mix ('/js/ui.js') }}"></script>
<script src="{{mix ('/js/app.js') }}"></script>
</html>