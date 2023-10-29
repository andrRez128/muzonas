<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/mainPage.css">
    <link rel="stylesheet" href="/css/rightPanel.css">
    <title><?php echo $__env->yieldContent('title-block'); ?></title>
</head>
<body>
    <?php echo $__env->yieldContent('leftPanel'); ?>

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
    
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\wamp64\www\muzonas\resources\views/app.blade.php ENDPATH**/ ?>