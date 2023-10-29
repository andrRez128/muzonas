<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/mainPage.css">
    <link rel="stylesheet" href="/css/rightPanel.css">
    <title>@yield('title-block')</title>
</head>
<body>
    @yield('leftPanel')

    <div class="sidePanel rightPanel">
        <div class="songLogo">
            
        </div>
        <h1>Name of song</h1>
        <h3>singer</h3>
        <div class="activeSong">
            <img class="playButton"src="/pictures/rightPanel/play.png" alt="">
            <div class="activeSongSliderBase">
                <div class="activeSongSliderLine">
                </div>
            </div>
        </div>
    </div> 
    
    @yield('content')
</body>
</html>